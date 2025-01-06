<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Maginium\Foundation\Exceptions\LocalizedException;

/**
 * Abstract Class AbstractPubSubService.
 *
 * A base abstract class for interacting with PubSub.
 */
abstract class AbstractPubSubService
{
    /**
     * Publishes a message to a topic in PubSub with additional metadata.
     *
     * @param string $topicName The topic to publish to.
     * @param mixed $payload The payload to publish.
     * @param string|null $channel Optional channel name to publish to.
     *
     * @throws LocalizedException
     */
    abstract public function publish(string $topicName, $payload, ?string $channel = null): void;

    /**
     * Publishes multiple messages to a topic in PubSub with additional metadata.
     *
     * @param string $topicName The topic to publish to.
     * @param array $messages An array of messages to publish.
     * @param string|null $channel Optional channel name to publish to.
     *
     * @throws LocalizedException
     */
    abstract public function publishBulk(string $topicName, array $messages, ?string $channel = null): void;

    /**
     * Subscribe to a PubSub topic and execute a callback when a message is received.
     *
     * @param string $topicName The topic to subscribe to.
     * @param callable $callback The callback function to execute when a message is received.
     *
     * @throws LocalizedException
     */
    abstract public function subscribe(string $topicName, ?callable $callback = null): void;

    /**
     * Handle the received message by decoding and processing the payload.
     *
     * @param string $topicName The topic from which the message was received.
     * @param string $message The received message.
     * @param callable $callback The callback function to execute with the extracted payload.
     *
     * @throws LocalizedException If there's an error processing the message.
     */
    abstract protected function handleMessage(string $topicName, string $message, ?callable $callback = null): void;

    /**
     * Prepares a message with metadata and payload.
     *
     * @param string $topicName The topic of the message.
     * @param mixed $payload The payload of the message.
     * @param bool $stringable Whether the return value should be a JSON-encoded string.
     *
     * @throws LocalizedException If there's an error preparing the message.
     *
     * @return mixed The prepared message, either as a JSON-encoded string or an array.
     */
    abstract protected function prepareMessage(string $topicName, $payload, bool $stringable = false);
}
