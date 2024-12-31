<?php

declare(strict_types=1);

namespace Maginium\Foundation\Exceptions;

use Magento\Framework\Phrase;
use Maginium\Foundation\Enums\HttpStatusCode;
use Throwable;

/**
 * Class LogicException.
 *
 * Represents a LogicException error, indicating that the application logic is incorrect or inconsistent.
 */
class LogicException extends LocalizedException
{
    /**
     * The type of the error (LogicError).
     */
    protected string $type = 'LogicError';

    /**
     * LogicException constructor.
     *
     * @param  string|Phrase  $message  The error message encapsulated in a Phrase object.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  string[]|null  $context  Additional context or data related to the exception (optional).
     */
    public function __construct(
        string|Phrase $message,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ) {
        // If message is a string, make it an instance of __() for translation
        if (is_string($message)) {
            $message = __($message); // Assuming __() is a translation function
        }

        // Call the parent constructor with necessary parameters
        parent::__construct(
            $message, // The error message (now translated if needed)
            $cause,   // The cause of the error
            $statusCode ?? HttpStatusCode::INTERNAL_SERVER_ERROR, // Default to 500 if no statusCode provided
            $code,    // The error code
            $context,   // Additional context
        );
    }

    /**
     * Static factory method to create a new instance of the LogicException class.
     *
     * @param  string|Phrase  $message  The error message encapsulated in a Phrase object.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  string[]|null  $context  Additional context or data related to the exception (optional).
     *
     * @return self A new instance of the LogicException class.
     */
    public static function make(
        string|Phrase $message,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ): self {
        return new self(
            $message,
            $cause,
            $statusCode,
            $code,
            $context,
        );
    }

    /**
     * Creates a new array representing a solution.
     *
     * @return array An associative array containing the solution details.
     */
    public function solution(): array
    {
        return [
            'title' => $this->type,
            'description' => $this->message,
            'links' => [
                'More Info' => 'https://docs.maginium.com/errors/' . $this->type, // Example link
            ],
        ];
    }
}
