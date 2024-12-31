<?php

declare(strict_types=1);

namespace Maginium\Foundation\Exceptions;

use DateTime;
use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonException;
use Magento\Framework\Phrase;
use Maginium\Foundation\Enums\HttpStatusCode;
use Maginium\Foundation\Solutions\Solution;
use Maginium\Framework\Support\Arr;
use Maginium\Framework\Support\Facades\Container;
use Maginium\Framework\Support\Facades\Json;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Str;
use Maginium\Framework\Support\Validator;
use Spatie\Ignition\Contracts\ProvidesSolution;
use Throwable;

/**
 * Class BaseException.
 */
class BaseException extends Exception implements Arrayable, Jsonable, ProvidesSolution
{
    /**
     * @var string hint message to help the user with troubleshooting the error (optional).
     */
    public $hint;

    /**
     * The type of error.
     */
    protected string $type;

    /**
     * The date when the error occurred.
     */
    protected DateTime $date;

    /**
     * The unique request id for the error.
     */
    protected string $requestId;

    /**
     * The original cause of the error (if any).
     */
    protected ?Exception $cause;

    /**
     * The original cause of the error (if any).
     *
     * @var Solution"null
     */
    protected ?Solution $solution;

    /**
     * The HTTP status code for the error.
     */
    protected int $statusCode;

    /**
     * Additional context for the error.
     */
    protected ?array $context;

    /**
     * @var Exception mask used when this exception is acting as a mask,
     *                this property stores the face exception.
     */
    protected $mask;

    /**
     * @var array fileContent relating to the exception, each value of the array is a file
     *            line number.
     */
    protected $fileContent = [];

    /**
     * @var string className of the called Exception.
     */
    protected $className;

    /**
     * @var string errorType derived from the error code, will be 'Undefined' if no code is used.
     */
    protected $errorType;

    /**
     * @var stdObject highlight cached code information for highlighting code.
     */
    protected $highlight;

    /**
     * Creates a standardized error instance.
     *
     * @param  string[]|null  $context  Additional context information related to the error.
     */
    public function __construct(
        ?string $type = null, // The type of error being created.
        ?Phrase $message = null, // The message to be displayed with the error, wrapped in a Phrase object.
        ?int $statusCode = null, // The HTTP status code associated with the error, or null if not applicable.
        string|int|null $code = null, // A specific error code, which can be a string, integer, or null.
        ?Exception $cause = null, // An optional exception that caused this error, if applicable.
        ?array $context = null, // An optional array providing additional context for the error.
        ?Solution $solution = null, // An optional solution object that may provide a resolution for the error.
    ) {
        // Call the parent constructor with the rendered message, status code, and cause.
        parent::__construct($message->render(), $statusCode, $cause);

        // Set the type of the error for this instance.
        $this->type = $type;

        // Store the cause of the error if it exists.
        $this->cause = $cause;

        // Store the message of the error as a Phrase object.
        $this->message = $message instanceof Phrase ? $message->render() : $message;

        // Store any additional context for the error.
        $this->context = $context;

        // Create a new DateTime object to record the current date and time of the error.
        $this->date = new DateTime;

        // Assign the HTTP status code to the instance variable.
        $this->statusCode = $statusCode;

        // Generate a unique request ID for tracking this specific error instance.
        $this->requestId = Str::uuid()->toString();

        // Assign the error code; if none is provided, derive it from the HTTP status label.
        $this->code = $code ?? HttpStatusCode::getLabel($statusCode);

        // Store the solution if provided for the error instance.
        $this->solution = $solution;

        // Call a method to log the error details, presumably for debugging or monitoring.
        $this->logError();

        // If the class name hasn't been set, assign it using the called class name.
        if ($this->className === null) {
            $this->className = get_called_class();
        }

        // If the error type hasn't been set, default it to 'Undefined'.
        if ($this->errorType === null) {
            $this->errorType = 'Undefined';
        }
    }

    /**
     * mask an exception with the called class. This should catch fatal and php errors.
     * It should always be followed by the unmask() method to remove the mask.
     *
     * @param  string  $message  Error message.
     * @param  int  $code  Error code.
     */
    public static function mask($message = null, $code = 0): void
    {
        $calledClass = get_called_class();
        $exception = new $calledClass($message, $code);

        // ErrorHandler::applyMask($exception);
    }

    /**
     * unmask removes the active mask from the called class.
     */
    public static function unmask(): void
    {
        // ErrorHandler::removeMask();
    }

    /**
     * Serializes the error to a plain array.
     */
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'message' => $this->message,
            'code' => $this->code,
            'date' => $this->date->format(DateTime::ATOM),
            'requestId' => $this->requestId,
            'cause' => $this->cause ? [
                'message' => $this->cause->getMessage(),
                'stack' => $this->cause->getTraceAsString(),
            ] : null,
            'statusCode' => $this->statusCode,
            'context' => $this->context,
        ];
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     *
     * @throws JsonException
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return Json::encode($this->toArray(), JSON_THROW_ON_ERROR);
    }

    /**
     * Creates a new array representing a solution.
     *
     * @return array An associative array containing the solution details.
     */
    public function solution(): array
    {
        // Create an associative array representing the solution.
        return [];
    }

    /**
     * Retrieves a Solution object by creating it from the DataObject or returns an empty Solution if not available.
     *
     * @return Solution A Solution object populated with data from the DataObject or an empty Solution.
     */
    public function getSolution(): Solution
    {
        // Initialize solution if it is not already created.
        if ($this->solution === null) {
            $this->solution = Container::resolve(Solution::class);
        }

        // Retrieve the DataObject using the solution method.
        $solutionData = $this->solution();

        // If no data is available, return a new empty Solution instance.
        if ($solutionData === null) {
            return $this->solution->create();
        }

        // Return a populated Solution instance with the retrieved data.
        return $this->solution->create()->setData($solutionData);
    }

    /**
     * getClassName returns the class name of the called Exception.
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * getErrorType returns the error type derived from the error code used.
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * getNiceFile returns a file that is suitable for sharing.
     *
     * @return string
     */
    public function getNiceFile()
    {
        // return File::nicePath($this->getFile());
    }

    /**
     * setMask is used if this exception acts as a mask, sets the face for the foreign exception.
     *
     * @param  Throwable  $exception  Face for the mask, the underlying exception.
     */
    public function setMask(Throwable $exception): void
    {
        $this->mask = $exception;
        $this->applyMask($exception);
    }

    /**
     * applyMask is used if this method is used when applying the mask exception to the face
     * exception. It can be used as an override for child classes who may use different
     * masking logic.
     *
     * @param  Throwable  $exception  Face exception being masked.
     */
    public function applyMask(Throwable $exception): void
    {
        $this->file = $exception->getFile();
        $this->message = $exception->getMessage();
        $this->line = $exception->getLine();
        $this->className = get_class($exception);
    }

    /**
     * getTrueException is used if this exception is acting as a mask, return the face exception.
     * Otherwise return this exception as the true one.
     *
     * @return Throwable The underlying exception, or this exception if no mask is applied.
     */
    public function getTrueException()
    {
        if ($this->mask !== null) {
            return $this->mask;
        }

        return $this;
    }

    /**
     * getHighlight generates information used for highlighting the area of code in context of the
     * exception line number. The highlighted block of code will be six (6) lines before and after
     * the problem line number.
     *
     * @return object Highlight information as an array, the following keys are supplied:
     *                startLine - The starting line number, 6 lines before the error line.
     *                endLine - The ending line number, 6 lines after the error line.
     *                errorLine - The focused error line number.
     *                lines - An array of all the lines to be highlighted, each value is a line of code.
     */
    public function getHighlight()
    {
        if ($this->highlight !== null) {
            return $this->highlight;
        }

        // if (! $this->fileContent && File::exists($this->file) && is_readable($this->file)) {
        //     $this->fileContent = @file($this->file) ?: [];

        // }

        $errorLine = $this->line - 1;
        $startLine = $errorLine - 6;

        if ($startLine < 0) {
            $startLine = 0;
        }

        $endLine = $startLine + 12;
        $lineNum = count($this->fileContent);

        if ($endLine > $lineNum - 1) {
            $endLine = $lineNum - 1;
        }

        $areaLines = Arr::slice($this->fileContent, $startLine, $endLine - $startLine + 1);

        $result = [
            'startLine' => $startLine,
            'endLine' => $endLine,
            'errorLine' => $errorLine,
            'lines' => [],
        ];

        foreach ($areaLines as $index => $line) {
            $result['lines'][$startLine + $index] = $line;
        }

        return $this->highlight = (object)$result;
    }

    /**
     * getHighlightLines returns an array of line numbers used for highlighting the problem area
     * of code. This will be six (6) lines before and after the error line number.
     *
     * @return array Array of code lines.
     */
    public function getHighlightLines()
    {
        $lines = $this->getHighlight()->lines;

        foreach ($lines as $index => $line) {
            $lines[$index] = mb_strlen(trim($line)) ? htmlentities($line) : '&nbsp;' . PHP_EOL;
        }

        return $lines;
    }

    /**
     * getCallStack returns the call stack as an array containing a stack information object.
     *
     * @return array with stack information, each value will be an object with these values:
     *               id - The stack ID number.
     *               code - The class and function name being called.
     *               args - The arguments passed to the code function above.
     *               file - Reference to the file containing the called code.
     *               line - Reference to the line number of the file.
     */
    public function getCallStack()
    {
        $result = [];
        $traceInfo = $this->filterCallStack($this->getTrueException()->getTrace());
        $lastIndex = count($traceInfo) - 1;

        foreach ($traceInfo as $index => $event) {
            if (! isset($event['function'])) {
                $event['function'] = null;
            }

            $functionName = (isset($event['class']) && mb_strlen($event['class']))
                ? $event['class'] . $event['type'] . $event['function']
                : $event['function'];

            // $file = isset($event['file']) ? '~' . File::localToPublic($event['file']) : null;
            $line = $event['line'] ?? null;

            $args = null;

            if (isset($event['args']) && count($event['args'])) {
                $args = $this->formatStackArguments($event['args']);
            }

            $result[] = (object)[
                'id' => $lastIndex - $index + 1,
                'code' => $functionName,
                'args' => $args ? htmlentities($args) : '',
                // 'file' => $file,
                'line' => $line,
            ];
        }

        return $result;
    }

    /**
     * Logs the error details.
     */
    protected function logError(): void
    {
        Log::critical(sprintf(
            '[%s] [%s] %s',
            $this->date->format(DateTime::ATOM),
            $this->requestId,
            $this->message,
        ), [
            'type' => $this->type,
            'code' => $this->code,
            'stack' => $this->getTraceAsString(),
            'context' => $this->context,
            'cause' => $this->cause ? $this->cause->getMessage() : null,
        ]);
    }

    /**
     * filterCallStack removes the final steps of a call stack, which add no value for the user.
     * The following exceptions and any trace information afterwards will be filtered:
     * - Illuminate\Foundation\Bootstrap\HandleExceptions.
     *
     * @param  array  $traceInfo  The trace information from getTrace() or debug_backtrace().
     *
     * @return array The filtered array containing the trace information.
     */
    protected function filterCallStack($traceInfo)
    {
        // Determine if filter should be used at all.
        $useFilter = false;

        foreach ($traceInfo as $event) {
            if (
                isset($event['class']) &&
                $event['class'] === 'Illuminate\Foundation\Bootstrap\HandleExceptions' &&
                $event['function'] === 'handleError'
            ) {
                $useFilter = true;
            }
        }

        if (! $useFilter) {
            return $traceInfo;
        }

        $filterResult = [];
        $pruneResult = true;

        foreach ($traceInfo as $index => $event) {
            // Prune the tail end of the trace from the framework exception handler.
            if (
                isset($event['class']) &&
                $event['class'] === 'Illuminate\Foundation\Bootstrap\HandleExceptions' &&
                $event['function'] === 'handleError'
            ) {
                $pruneResult = false;

                continue;
            }

            if ($pruneResult) {
                continue;
            }

            $filterResult[$index] = $event;
        }

        return $filterResult;
    }

    /**
     * formatStackArguments prepares a function or method argument list for display in HTML or text format.
     *
     * @param  array  $arguments  A list of the function or method arguments
     *
     * @return string
     */
    protected function formatStackArguments($arguments)
    {
        $argsArray = [];

        foreach ($arguments as $argument) {
            $arg = null;

            if (Validator::isArray($argument)) {
                $items = [];

                foreach ($argument as $index => $obj) {
                    if (Validator::isArray($obj)) {
                        $value = 'array(' . count($obj) . ')';
                    } elseif (is_object($obj)) {
                        $value = 'object(' . get_class($obj) . ')';
                    } elseif (Validator::isInt($obj)) {
                        $value = $obj;
                    } elseif ($obj === null) {
                        $value = 'null';
                    } else {
                        $value = "'" . $obj . "'";
                    }

                    $items[] = $index . ' => ' . $value;
                }

                if (Validator::isEmpty($items)) {
                    $arg = 'array(' . Php::count($argument) . ') [' . implode(', ', $items) . ']';
                } else {
                    $arg = 'array(0)';
                }
            } elseif (is_object($argument)) {
                $arg = 'object(' . get_class($argument) . ')';
            } elseif ($argument === null) {
                $arg = 'null';
            } elseif (Validator::isInt($argument)) {
                $arg = $argument;
            } else {
                $arg = "'" . $argument . "'";
            }

            $argsArray[] = $arg;
        }

        return implode(', ', $argsArray);
    }
}
