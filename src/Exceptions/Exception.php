<?php

declare(strict_types=1);

namespace Maginium\Foundation\Exceptions;

use Exception as BaseException;
use Magento\Framework\Phrase;
use Maginium\Foundation\Enums\HttpStatusCode;
use Maginium\Framework\Support\Validator;
use Throwable;

/**
 * Class Exception.
 *
 * This is the base exception class for the application. It extends PHP's built-in Exception
 * and provides additional functionality such as support for HTTP status codes, context metadata,
 * and standardized solutions for error handling.
 */
class Exception extends BaseException
{
    /**
     * The type of the error for categorization purposes.
     * For example, it can be 'ValidationError', 'DatabaseError', etc.
     * Default value is 'GenericError'.
     */
    protected string $type = 'GenericError';

    /**
     * The HTTP status code associated with this exception.
     * This helps in mapping the exception to an appropriate HTTP response code (e.g., 404, 500).
     */
    protected int $statusCode;

    /**
     * Additional context or metadata related to the exception.
     * This can be used to store extra information (e.g., request data, debug details).
     */
    protected ?array $context;

    /**
     * Exception constructor.
     *
     * @param  Phrase|string|null  $message  The error message or Phrase object.
     *                                       Defaults to a generic error message if not provided.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The HTTP status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  array|null  $context  Additional context or metadata related to the exception (optional).
     */
    public function __construct(
        Phrase|string|null $message = null,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ) {
        // Assign the provided or default HTTP status code
        $this->statusCode = $statusCode ?? HttpStatusCode::INTERNAL_SERVER_ERROR;

        // Assign additional context data
        $this->context = $context;

        // If no message is provided, use a default message
        if ($message === null) {
            $message = 'An error occurred. Please contact support.';
        }

        // Directly set the message property (inherited from the base Exception class)
        $this->message = (string)$message;

        // Call the parent constructor with the resolved values
        parent::__construct(
            $this->getMessage(), // Use the resolved message
            (int)($code ?? $this->statusCode), // Use the provided code or fallback to the status code
            $cause, // Pass the original exception (if any) for better traceability
        );
    }

    /**
     * Static factory method to create a new Exception instance.
     *
     * This method provides a convenient way to instantiate the Exception class with
     * additional parameters like HTTP status code, context, etc.
     *
     * @param  Phrase|string|null  $message  The error message or Phrase object.
     * @param  Throwable|null  $cause  The original exception that caused this exception (optional).
     * @param  int|null  $statusCode  The HTTP status code for the error (optional).
     * @param  string|int|null  $code  The error code associated with the exception (optional).
     * @param  array|null  $context  Additional context or metadata related to the exception (optional).
     *
     * @return self A new instance of the Exception class.
     */
    public static function make(
        Phrase|string|null $message = null,
        ?Throwable $cause = null,
        ?int $statusCode = null,
        string|int|null $code = null,
        ?array $context = null,
    ): self {
        if (Validator::isString($message)) {
            $message = __($message);
        }

        // Create and return a new Exception instance with the provided parameters
        return new self($message, $cause, $statusCode, $code, $context);
    }

    /**
     * Retrieve the HTTP status code associated with the exception.
     *
     * This is useful for generating an appropriate HTTP response when this exception is thrown.
     *
     * @return int The HTTP status code.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Retrieve additional context or metadata associated with the exception.
     *
     * This can include extra information like user inputs, API responses, or debug details.
     *
     * @return array|null The context data or null if no context is provided.
     */
    public function getContext(): ?array
    {
        return $this->context;
    }

    /**
     * Provide a standardized solution for the exception.
     *
     * This method returns a structured array with details about the exception,
     * which can be used for logging, reporting, or displaying error messages.
     *
     * @return array An associative array containing solution details, including:
     *               - `type`: The type of the error.
     *               - `message`: The error message.
     *               - `status_code`: The HTTP status code.
     *               - `context`: Any additional context data.
     *               - `documentation_link`: A link to documentation for this error type.
     */
    public function solution(): array
    {
        return [
            'type' => $this->type, // The type of error (e.g., 'ValidationError', 'DatabaseError')
            'message' => $this->getMessage(), // The error message
            'status_code' => $this->getStatusCode(), // The HTTP status code (e.g., 500)
            'context' => $this->getContext(), // Any additional metadata or context
            'documentation_link' => 'https://docs.maginium.com/errors/' . $this->type, // Link to documentation
        ];
    }
}
