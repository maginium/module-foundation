<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\Observer;

use Illuminate\Contracts\Support\Arrayable;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Framework\Support\Collection;
use Maginium\Framework\Support\DataObject;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Reflection;
use Maginium\Framework\Support\Validator;

/**
 * Abstract base class for Magento event observers.
 *
 * Provides a foundational structure for handling Magento events, including initialization
 * of event data, validation of data objects, and dynamic invocation of actions.
 *
 * Subclasses must implement the abstract `handle` method to define the specific logic
 * for processing events.
 */
abstract class AbstractObserver implements ObserverInterface
{
    /**
     * Key for 'data'.
     */
    public const DATA = 'data';

    /**
     * The name of the event that triggered the observer.
     *
     * @var string|null
     */
    protected ?string $eventName = null;

    /**
     * The event object containing event-specific data.
     *
     * @var object|null
     */
    protected ?object $event = null;

    /**
     * The model or data object associated with the event.
     *
     * @var DataObject|null
     */
    protected ?DataObject $data = null;

    /**
     * Constructor to initialize common dependencies for event observers.
     *
     * Sets up the logger with the current class name for consistent logging.
     */
    public function __construct()
    {
        Log::setClassName(static::class);
    }

    /**
     * Executes the observer logic when an event is triggered.
     *
     * - Initializes the event data from the observer.
     * - Validates the retrieved data object.
     * - Invokes the `handle` method if the data object is valid.
     *
     * @param Observer $observer The Magento observer instance containing event details.
     */
    public function execute(Observer $observer): void
    {
        // Initialize the event details from the observer.
        $this->initializeEvent($observer);

        // Validate and process the data object if it is valid.
        if (Validator::isDataObject($this->data)) {
            $this->handle();
        }
    }

    /**
     * Abstract method for handling the event logic.
     *
     * Subclasses must implement this method to define the specific actions to take
     * when the observer is triggered.
     *
     * @throws Exception If the handling logic encounters an error.
     */
    abstract protected function handle(): void;

    /**
     * Initializes the event data by extracting details from the observer instance.
     *
     * - Retrieves the event object and its name.
     * - Retrieves the associated data object from the event.
     *
     * @param Observer $observer The observer instance containing event data.
     */
    protected function initializeEvent(Observer $observer): void
    {
        // Extract the event object from the observer.
        $this->event = $observer->getEvent();
        $this->eventName = $this->event->getName();

        // Retrieve the associated data object from the event.
        $this->data = $this->prepareData($observer->getData(static::DATA));
    }

    /**
     * Prepares the data object by converting it into an appropriate structure.
     *
     * This method checks if the data object implements certain interfaces or methods
     * to convert it to an array and then wraps it in a DataObject instance.
     *
     * @param mixed $data The raw data to be processed.
     *
     * @return DataObject The prepared data object.
     */
    private function prepareData(mixed $data): DataObject
    {
        // Check if the data is an instance of Arrayable or Collection and convert to array.
        if ($data instanceof Arrayable || $data instanceof Collection) {
            $data = $data->toArray();
        }

        // Check if the data object has a "toArray" method using reflection and convert to array.
        if (Validator::isObject($data) && Reflection::methodExists($data, 'toArray')) {
            $data = $data->toArray();
        }

        // Wrap the data in a DataObject for consistency and return.
        return DataObject::make($data);
    }
}
