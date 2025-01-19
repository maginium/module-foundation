<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\Observer;

use Magento\Framework\Event\Observer;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Enum\Enum;
use Maginium\Framework\Support\DataObject;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Reflection;
use Maginium\Framework\Support\Str;
use Maginium\Framework\Support\Validator;
use Override;
use ReflectionException;
use Throwable;

/**
 * Abstract base class for Magento event observers.
 *
 * This class provides the logic for handling events in Magento, including processing
 * events, retrieving event data, validating the data, and dynamically invoking corresponding
 * actions based on event names.
 *
 * @property string $eventPrefix
 */
abstract class AbstractEntityObserver extends AbstractObserver
{
    /**
     * The model class that handles the event-related data processing.
     *
     * @var ModelInterface|null
     */
    protected ?ModelInterface $model = null;

    /**
     * Holds pub/sub system events related to the observer.
     *
     * @var Enum|null
     */
    protected ?Enum $broadcastEvents = null;

    /**
     * Constructor to initialize the observer with dependencies such as the model and index repository.
     *
     * @param ModelInterface|null $model The model associated with the event (optional).
     */
    public function __construct(
        ?ModelInterface $model = null,
    ) {
        $this->model = $model;

        // Set up the class name for logging purposes.
        Log::setClassName(static::class);
    }

    /**
     * Abstract method for handling the event logic.
     *
     * Subclasses must implement this method to define the specific actions to take
     * when the observer is triggered.
     *
     * @throws Exception If the handling logic encounters an error.
     */
    protected function handle(): void
    {
        // Determine the corresponding method name for the event
        $method = $this->getActionForEvent();

        // If no method is mapped for the event, log a warning and exit early
        if (! $method) {
            Log::error("No matching methods for event: {$this->eventName}");

            // Exit early as there's no method to process
            return;
        }

        // Check if the method exists and invoke it
        if (Reflection::methodExists($this, $method)) {
            $this->{$method}($this->data);
        } else {
            // Log a warning if the method is not found
            Log::warning("Unhandled event: {$this->eventName}");
        }
    }

    /**
     * Initializes the event data by extracting details from the observer instance.
     *
     * - Retrieves the event object and its name.
     * - Retrieves the associated data object from the event.
     *
     * @param Observer $observer The observer instance containing event data.
     */
    #[Override]
    protected function initializeEvent(Observer $observer): void
    {
        // Retrieve the event and its name from the observer
        $this->event = $observer->getEvent();
        $this->eventName = $this->event->getName();

        // Get the model class name to use in data extraction
        $modelClass = Reflection::getClassName($this->model);

        // Retrieve the associated data object from the event
        $this->data = $this->getData($observer, $modelClass);
    }

    /**
     * Retrieves the event data object based on the model class name.
     *
     * This method dynamically determines the appropriate getter method for the event data
     * and validates the returned data object.
     *
     * @param Observer $observer The observer instance that contains event details.
     * @param string $modelClass The model class name to help determine the getter method.
     *
     * @throws ReflectionException If the getter method is not found or fails.
     *
     * @return mixed|null The data object associated with the event, or null if invalid.
     */
    private function getData(Observer $observer, string $modelClass)
    {
        try {
            // Construct the getter method name dynamically
            $methodName = 'get' . Str::capital($this->model->getEventObject()) ?? 'get' . Str::capital(Reflection::getClassBasename($modelClass));

            // Ensure the event and method exist
            $event = $observer->getEvent();

            // Call the getter method to retrieve the event data
            $eventData = $event->{$methodName}();

            // Validate the retrieved data object
            if (Validator::isEmpty($eventData)) {
                // Return null if no data is present
                return;
            }

            // If the event data is a valid object, return null
            if (! Validator::isObject($eventData)) {
                // Return null if object is not valid
                return;
            }

            // If the event data is a valid DataObject, return a new instance
            if (! Validator::isDataObject($eventData)) {
                return DataObject::make($eventData->getData());
            }

            // If not a DataObject, return the raw event data
            return $eventData;
        } catch (ReflectionException $e) {
            // Log the exception or handle it as required
            Log::error("Error retrieving data for model class {$modelClass}: " . $e->getMessage());

            throw $e;
        } catch (Throwable $e) {
            // Handle any other unexpected exceptions
            Log::critical('Unexpected error in getData: ' . $e->getMessage(), ['modelClass' => $modelClass]);

            throw $e;
        }
    }

    /**
     * Maps the event name to the corresponding action method name.
     *
     * Converts an event name (e.g., 'event_name') into a method name (e.g., 'onEventName')
     * by removing the event prefix, capitalizing each part of the event name, and concatenating them together.
     *
     * @param string $event The event name to map.
     *
     * @return string|null The corresponding method name, or null if the event is not valid.
     */
    private function getActionForEvent(): ?string
    {
        // Remove the event prefix (if present)
        $eventNameWithoutPrefix = Str::replace($this->model->getEventPrefix(), '', $this->eventName);

        // Split the event name into parts by underscores
        $eventNameParts = Php::explode('_', $eventNameWithoutPrefix);

        // Capitalize the first letter of each part and join them together
        $methodNameParts = collect($eventNameParts)->map(fn($part) => Str::capital($part))->toArray();

        // Concatenate the parts back together and prepend 'on' to form the final method name
        return Str::lcfirst(Php::implode('', $methodNameParts));
    }
}
