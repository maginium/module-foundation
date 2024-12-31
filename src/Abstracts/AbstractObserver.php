<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Exception;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Maginium\Framework\Support\DataObject;
use Maginium\Framework\Support\Facades\Log;
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
        $this->data = $this->prepareData($observer->getData('data'));
    }

    /**
     * Prepare the data by converting nested arrays into DataObject instances.
     *
     * @param mixed $data The input data to process.
     *
     * @return mixed The prepared data with arrays converted to DataObject instances.
     */
    protected function prepareData(mixed $data): mixed
    {
        // If the data is an array, iterate over it
        if (Validator::isArray($data)) {
            foreach ($data as $key => $value) {
                // Recursively process each value in the array
                $data[$key] = $this->prepareData($value);
            }

            // Convert the array into a DataObject
            return DataObject::make($data);
        }

        // If the data is not an array, return it as-is
        return $data;
    }
}
