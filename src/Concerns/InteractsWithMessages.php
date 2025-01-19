<?php

declare(strict_types=1);

namespace Maginium\Foundation\Concerns;

use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Phrase;
use Maginium\Foundation\Exceptions\InvalidArgumentException;

/**
 * Trait InteractsWithMessages.
 *
 * Provides reusable methods for managing different types of messages, such as success, error, warning, and notice.
 * Classes using this trait must have access to a ManagerInterface instance.
 */
trait InteractsWithMessages
{
    /**
     * Message manager instance for adding messages to the session.
     *
     * @var ManagerInterface
     */
    protected ManagerInterface $messageManager;

    /**
     * Add a success message to the session.
     *
     * @param Phrase|string $message The message to display.
     */
    protected function addSuccessMessage(Phrase|string $message): void
    {
        $this->messageManager->addSuccessMessage($message);
    }

    /**
     * Add an error message to the session.
     *
     * @param Phrase|string $message The message to display.
     */
    protected function addErrorMessage(Phrase|string $message): void
    {
        $this->messageManager->addErrorMessage($message);
    }

    /**
     * Add a warning message to the session.
     *
     * @param Phrase|string $message The message to display.
     */
    protected function addWarningMessage(Phrase|string $message): void
    {
        $this->messageManager->addWarningMessage($message);
    }

    /**
     * Add a notice message to the session.
     *
     * @param Phrase|string $message The message to display.
     */
    protected function addNoticeMessage(Phrase|string $message): void
    {
        $this->messageManager->addNoticeMessage($message);
    }

    /**
     * Add a generic message based on the provided type.
     *
     * @param string $type The type of the message ('success', 'error', 'warning', 'notice').
     * @param Phrase|string $message The message to display.
     *
     * @throws InvalidArgumentException If an invalid message type is provided.
     */
    protected function addMessage(string $type, Phrase|string $message): void
    {
        match ($type) {
            'success' => $this->addSuccessMessage($message),
            'error' => $this->addErrorMessage($message),
            'warning' => $this->addWarningMessage($message),
            'notice' => $this->addNoticeMessage($message),
            default => throw new InvalidArgumentException(__('Invalid message type: %1', $type)),
        };
    }
}
