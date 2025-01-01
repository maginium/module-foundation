<?php

declare(strict_types=1);

namespace Maginium\Foundation\Exceptions;

use Magento\Framework\Phrase;
use Maginium\Foundation\Enums\HttpStatusCode;
use Throwable;

/**
 * Class ConflictException.
 *
 * Represents a ConflictException error, indicating a conflict in the request that prevents it from being processed.
 */
class ConflictException extends LocalizedException
{
    /**
     * The type of the error (ConflictError).
     */
    protected string $type = 'ConflictError';

    /**
     * Private constructor to prevent direct instantiation.
     *
     * @param  Phrase  $message  The error message encapsulated in a Phrase object.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  string[]|null  $context  Additional context or data related to the exception (optional).
     */
    public function __construct(
        Phrase $message,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ) {
        // Call the parent constructor with necessary parameters
        parent::__construct(
            $message, // The error message
            $cause,   // The cause of the error
            $statusCode ?? HttpStatusCode::CONFLICT, // Default to 409 if no statusCode provided
            $code,    // The error code
            $context,   // Additional context
        );
    }

    /**
     * Static factory method to create a new instance of ConflictException.
     *
     * @param  Phrase  $message  The error message encapsulated in a Phrase object.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  string[]|null  $context  Additional context or data related to the exception (optional).
     *
     * @return self A new instance of the ConflictException.
     */
    public static function make(
        Phrase $message,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ): self {
        return new self(
            $message,
            $cause,
            $statusCode ?? HttpStatusCode::CONFLICT, // Default to 409 if no statusCode provided
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
            'description' => $this->getMessage(),
            'links' => [
                'More Info' => 'https://docs.maginium.com/errors/' . $this->type, // Example link
            ],
        ];
    }
}
