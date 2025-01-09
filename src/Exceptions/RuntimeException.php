<?php

declare(strict_types=1);

namespace Maginium\Foundation\Exceptions;

use Magento\Framework\Phrase;
use Maginium\Foundation\Enums\HttpStatusCode;
use Throwable;

/**
 * Class RuntimeException.
 *
 * Represents a RuntimeException error, indicating that an error occurred during the execution of the program.
 */
class RuntimeException extends LocalizedException
{
    /**
     * The type of the error (RuntimeError).
     */
    protected string $type = 'RuntimeError';

    /**
     * RuntimeException constructor.
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
            $message, // The error message
            $cause,   // The cause of the error
            $statusCode ?? HttpStatusCode::INTERNAL_SERVER_ERROR, // Default to 500 if no statusCode provided
            $code,    // The error code
            $context,   // Additional context
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
            'description' => $this->getMessage(),
            'links' => [
                'More Info' => 'https://docs.maginium.com/errors/' . $this->type, // Example link
            ],
        ];
    }
}
