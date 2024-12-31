<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing HTTP status codes.
 *
 * @method static self CONTINUE() 100 Continue
 * @method static self SWITCHING_PROTOCOLS() 101 Switching Protocols
 * @method static self PROCESSING() 102 Processing
 * @method static self OK() 200 OK
 * @method static self CREATED() 201 Created
 * @method static self ACCEPTED() 202 Accepted
 * @method static self NON_AUTHORITATIVE_INFORMATION() 203 Non-Authoritative Information
 * @method static self NO_CONTENT() 204 No Content
 * @method static self RESET_CONTENT() 205 Reset Content
 * @method static self PARTIAL_CONTENT() 206 Partial Content
 * @method static self MULTI_STATUS() 207 Multi-Status
 * @method static self ALREADY_REPORTED() 208 Already Reported
 * @method static self IM_USED() 226 IM Used
 * @method static self MULTIPLE_CHOICES() 300 Multiple Choices
 * @method static self MOVED_PERMANENTLY() 301 Moved Permanently
 * @method static self FOUND() 302 Found
 * @method static self SEE_OTHER() 303 See Other
 * @method static self NOT_MODIFIED() 304 Not Modified
 * @method static self USE_PROXY() 305 Use Proxy
 * @method static self RESERVED() 306 Reserved
 * @method static self TEMPORARY_REDIRECT() 307 Temporary Redirect
 * @method static self PERMANENT_REDIRECT() 308 Permanent Redirect
 * @method static self BAD_REQUEST() 400 Bad Request
 * @method static self UNAUTHORIZED() 401 Unauthorized
 * @method static self PAYMENT_REQUIRED() 402 Payment Required
 * @method static self FORBIDDEN() 403 Forbidden
 * @method static self NOT_FOUND() 404 Not Found
 * @method static self METHOD_NOT_ALLOWED() 405 Method Not Allowed
 * @method static self NOT_ACCEPTABLE() 406 Not Acceptable
 * @method static self PROXY_AUTHENTICATION_REQUIRED() 407 Proxy Authentication Required
 * @method static self REQUEST_TIMEOUT() 408 Request Timeout
 * @method static self CONFLICT() 409 Conflict
 * @method static self GONE() 410 Gone
 * @method static self LENGTH_REQUIRED() 411 Length Required
 * @method static self PRECONDITION_FAILED() 412 Precondition Failed
 * @method static self PAYLOAD_TOO_LARGE() 413 Payload Too Large
 * @method static self URI_TOO_LONG() 414 URI Too Long
 * @method static self UNSUPPORTED_MEDIA_TYPE() 415 Unsupported Media Type
 * @method static self RANGE_NOT_SATISFIABLE() 416 Range Not Satisfiable
 * @method static self EXPECTATION_FAILED() 417 Expectation Failed
 * @method static self IM_A_TEAPOT() 418 I'm a teapot
 * @method static self MISDIRECTED_REQUEST() 421 Misdirected Request
 * @method static self UNPROCESSABLE_ENTITY() 422 Unprocessable Entity
 * @method static self LOCKED() 423 Locked
 * @method static self FAILED_DEPENDENCY() 424 Failed Dependency
 * @method static self TOO_EARLY() 425 Too Early
 * @method static self UPGRADE_REQUIRED() 426 Upgrade Required
 * @method static self PRECONDITION_REQUIRED() 428 Precondition Required
 * @method static self TOO_MANY_REQUESTS() 429 Too Many Requests
 * @method static self REQUEST_HEADER_FIELDS_TOO_LARGE() 431 Request Header Fields Too Large
 * @method static self UNAVAILABLE_FOR_LEGAL_REASONS() 451 Unavailable For Legal Reasons
 * @method static self INTERNAL_SERVER_ERROR() 500 Internal Server Error
 * @method static self NOT_IMPLEMENTED() 501 Not Implemented
 * @method static self BAD_GATEWAY() 502 Bad Gateway
 * @method static self SERVICE_UNAVAILABLE() 503 Service Unavailable
 * @method static self GATEWAY_TIMEOUT() 504 Gateway Timeout
 * @method static self VERSION_NOT_SUPPORTED() 505 HTTP Version Not Supported
 * @method static self VARIANT_ALSO_NEGOTIATES() 506 Variant Also Negotiates
 * @method static self INSUFFICIENT_STORAGE() 507 Insufficient Storage
 * @method static self LOOP_DETECTED() 508 Loop Detected
 * @method static self NOT_EXTENDED() 510 Not Extended
 * @method static self NETWORK_AUTHENTICATION_REQUIRED() 511 Network Authentication Required
 */
class HttpStatusCode extends Enum
{
    /**
     * Informational 1xx
     * 100 Continue.
     *
     * @var int
     */
    #[Label('Continue')]
    #[Description('100 Continue: The server has received the request headers, and the client should proceed to send the request body.')]
    public const CONTINUE = 100;

    /**
     * 101 Switching Protocols.
     *
     * @var int
     */
    #[Label('Switching Protocols')]
    #[Description('101 Switching Protocols: The requester has asked the server to switch protocols, and the server has agreed to do so.')]
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * 102 Processing.
     *
     * @var int
     */
    #[Label('Processing')]
    #[Description('102 Processing: The server has received and is processing the request, but no response is available yet.')]
    public const PROCESSING = 102;

    /**
     * Successful 2xx
     * 200 OK.
     *
     * @var int
     */
    #[Label('OK')]
    #[Description('200 OK: The request was successful, and the response contains the requested data.')]
    public const OK = 200;

    /**
     * 201 Created.
     *
     * @var int
     */
    #[Label('Created')]
    #[Description('201 Created: The request was successful, and a new resource was created.')]
    public const CREATED = 201;

    /**
     * 202 Accepted.
     *
     * @var int
     */
    #[Label('Accepted')]
    #[Description('202 Accepted: The request has been accepted for processing, but the processing has not been completed.')]
    public const ACCEPTED = 202;

    /**
     * 203 Non-Authoritative Information.
     *
     * @var int
     */
    #[Label('Non-Authoritative Information')]
    #[Description('203 Non-Authoritative Information: The server successfully processed the request, but is returning information that may be from another source.')]
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content.
     *
     * @var int
     */
    #[Label('No Content')]
    #[Description('204 No Content: The server successfully processed the request, but is not returning any content.')]
    public const NO_CONTENT = 204;

    /**
     * 205 Reset Content.
     *
     * @var int
     */
    #[Label('Reset Content')]
    #[Description('205 Reset Content: The server successfully processed the request, and the user agent should reset the document view.')]
    public const RESET_CONTENT = 205;

    /**
     * 206 Partial Content.
     *
     * @var int
     */
    #[Label('Partial Content')]
    #[Description('206 Partial Content: The server is delivering only part of the resource due to a range header sent by the client.')]
    public const PARTIAL_CONTENT = 206;

    /**
     * 207 Multi-Status.
     *
     * @var int
     */
    #[Label('Multi-Status')]
    #[Description('207 Multi-Status: The message body contains multiple status codes for different parts of the request.')]
    public const MULTI_STATUS = 207;

    /**
     * 208 Already Reported.
     *
     * @var int
     */
    #[Label('Already Reported')]
    #[Description('208 Already Reported: The members of a DAV binding have already been enumerated in a previous part of the response.')]
    public const ALREADY_REPORTED = 208;

    /**
     * 226 IM Used.
     *
     * @var int
     */
    #[Label('IM Used')]
    #[Description('226 IM Used: The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.')]
    public const IM_USED = 226;

    /**
     * Redirection 3xx
     * 300 Multiple Choices.
     *
     * @var int
     */
    #[Label('Multiple Choices')]
    #[Description('300 Multiple Choices: The request has more than one possible response. The user or user agent should choose one of them.')]
    public const MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently.
     *
     * @var int
     */
    #[Label('Moved Permanently')]
    #[Description('301 Moved Permanently: The resource has been moved to a new URL permanently.')]
    public const MOVED_PERMANENTLY = 301;

    /**
     * 302 Found.
     *
     * @var int
     */
    #[Label('Found')]
    #[Description('302 Found: The resource has been temporarily moved to a different URL.')]
    public const FOUND = 302;

    /**
     * 303 See Other.
     *
     * @var int
     */
    #[Label('See Other')]
    #[Description('303 See Other: The response to the request can be found under a different URL using a GET method.')]
    public const SEE_OTHER = 303;

    /**
     * 304 Not Modified.
     *
     * @var int
     */
    #[Label('Not Modified')]
    #[Description('304 Not Modified: The resource has not been modified since the last request.')]
    public const NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy.
     *
     * @var int
     */
    #[Label('Use Proxy')]
    #[Description('305 Use Proxy: The requested resource is available only through a proxy. The proxy address is provided in the response.')]
    public const USE_PROXY = 305;

    /**
     * 306 Reserved.
     *
     * @var int
     */
    #[Label('Reserved')]
    #[Description('306 Reserved: This status code was used in a previous version of the HTTP specification. It is reserved for future use.')]
    public const RESERVED = 306;

    /**
     * 307 Temporary Redirect.
     *
     * @var int
     */
    #[Label('Temporary Redirect')]
    #[Description('307 Temporary Redirect: The resource has been temporarily moved to a different URL. Future requests should use the original URL.')]
    public const TEMPORARY_REDIRECT = 307;

    /**
     * 308 Permanent Redirect.
     *
     * @var int
     */
    #[Label('Permanent Redirect')]
    #[Description('308 Permanent Redirect: The resource has been permanently moved to a new URL, and future requests should use the new URL.')]
    public const PERMANENT_REDIRECT = 308;

    /**
     * Client Error 4xx
     * 400 Bad Request.
     *
     * @var int
     */
    #[Label('Bad Request')]
    #[Description('400 Bad Request: The server cannot process the request due to a client error.')]
    public const BAD_REQUEST = 400;

    /**
     * 401 Unauthorized.
     *
     * @var int
     */
    #[Label('Unauthorized')]
    #[Description('401 Unauthorized: Authentication is required and has failed or has not yet been provided.')]
    public const UNAUTHORIZED = 401;

    /**
     * 402 Payment Required.
     *
     * @var int
     */
    #[Label('Payment Required')]
    #[Description('402 Payment Required: Reserved for future use, currently not used.')]
    public const PAYMENT_REQUIRED = 402;

    /**
     * 403 Forbidden.
     *
     * @var int
     */
    #[Label('Forbidden')]
    #[Description('403 Forbidden: The server understands the request, but refuses to authorize it.')]
    public const FORBIDDEN = 403;

    /**
     * 404 Not Found.
     *
     * @var int
     */
    #[Label('Not Found')]
    #[Description('404 Not Found: The requested resource could not be found.')]
    public const NOT_FOUND = 404;

    /**
     * 405 Method Not Allowed.
     *
     * @var int
     */
    #[Label('Method Not Allowed')]
    #[Description('405 Method Not Allowed: The request method is known by the server but is not supported for the targeted resource.')]
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * 406 Not Acceptable.
     *
     * @var int
     */
    #[Label('Not Acceptable')]
    #[Description('406 Not Acceptable: The server cannot generate a response that is acceptable to the client based on the Accept headers sent in the request.')]
    public const NOT_ACCEPTABLE = 406;

    /**
     * 407 Proxy Authentication Required.
     *
     * @var int
     */
    #[Label('Proxy Authentication Required')]
    #[Description('407 Proxy Authentication Required: The client must first authenticate itself with the proxy.')]
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * 408 Request Timeout.
     *
     * @var int
     */
    #[Label('Request Timeout')]
    #[Description('408 Request Timeout: The server timed out waiting for the request.')]
    public const REQUEST_TIMEOUT = 408;

    /**
     * 409 Conflict.
     *
     * @var int
     */
    #[Label('Conflict')]
    #[Description('409 Conflict: The request could not be completed due to a conflict with the current state of the resource.')]
    public const CONFLICT = 409;

    /**
     * 410 Gone.
     *
     * @var int
     */
    #[Label('Gone')]
    #[Description('410 Gone: The resource requested is no longer available and will not be available again.')]
    public const GONE = 410;

    /**
     * 411 Length Required.
     *
     * @var int
     */
    #[Label('Length Required')]
    #[Description('411 Length Required: The request did not specify the length of its content, which is required by the resource.')]
    public const LENGTH_REQUIRED = 411;

    /**
     * 412 Precondition Failed.
     *
     * @var int
     */
    #[Label('Precondition Failed')]
    #[Description('412 Precondition Failed: One or more conditions given in the request header fields evaluated to false when tested by the server.')]
    public const PRECONDITION_FAILED = 412;

    /**
     * 413 Payload Too Large.
     *
     * @var int
     */
    #[Label('Payload Too Large')]
    #[Description('413 Payload Too Large: The request is larger than the server is willing or able to process.')]
    public const PAYLOAD_TOO_LARGE = 413;

    /**
     * 414 URI Too Long.
     *
     * @var int
     */
    #[Label('URI Too Long')]
    #[Description('414 URI Too Long: The URI provided was too long for the server to process.')]
    public const URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type.
     *
     * @var int
     */
    #[Label('Unsupported Media Type')]
    #[Description('415 Unsupported Media Type: The request model has a media type that the server or resource does not support.')]
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * 416 Range Not Satisfiable.
     *
     * @var int
     */
    #[Label('Range Not Satisfiable')]
    #[Description('416 Range Not Satisfiable: The server cannot provide the portion of the file requested by the client.')]
    public const RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed.
     *
     * @var int
     */
    #[Label('Expectation Failed')]
    #[Description('417 Expectation Failed: The server cannot meet the requirements of the Expect request-header field.')]
    public const EXPECTATION_FAILED = 417;

    /**
     * 418 I'm a teapot.
     *
     * @var int
     */
    #[Label("I'm a teapot")]
    #[Description("418 I'm a teapot: Any attempt to instruct a teapot to do anything other than brewing coffee should be responded to with this error code.")]
    public const IM_A_TEAPOT = 418;

    /**
     * 421 Misdirected Request.
     *
     * @var int
     */
    #[Label('Misdirected Request')]
    #[Description('421 Misdirected Request: The request was directed at a server that is not able to produce a response.')]
    public const MISDIRECTED_REQUEST = 421;

    /**
     * 422 Unprocessable Entity.
     *
     * @var int
     */
    #[Label('Unprocessable Entity')]
    #[Description('422 Unprocessable Entity: The request was well-formed but was unable to be followed due to semantic errors.')]
    public const UNPROCESSABLE_ENTITY = 422;

    /**
     * 423 Locked.
     *
     * @var int
     */
    #[Label('Locked')]
    #[Description('423 Locked: The resource that is being accessed is locked.')]
    public const LOCKED = 423;

    /**
     * 424 Failed Dependency.
     *
     * @var int
     */
    #[Label('Failed Dependency')]
    #[Description('424 Failed Dependency: The request failed due to failure of a previous request.')]
    public const FAILED_DEPENDENCY = 424;

    /**
     * 425 Too Early.
     *
     * @var int
     */
    #[Label('Too Early')]
    #[Description('425 Too Early: The server is unwilling to risk processing a request that might be replayed.')]
    public const TOO_EARLY = 425;

    /**
     * 426 Upgrade Required.
     *
     * @var int
     */
    #[Label('Upgrade Required')]
    #[Description('426 Upgrade Required: The client should switch to a different protocol as specified in the Upgrade header.')]
    public const UPGRADE_REQUIRED = 426;

    /**
     * 428 Precondition Required.
     *
     * @var int
     */
    #[Label('Precondition Required')]
    #[Description('428 Precondition Required: The server requires the request to be conditional.')]
    public const PRECONDITION_REQUIRED = 428;

    /**
     * 429 Too Many Requests.
     *
     * @var int
     */
    #[Label('Too Many Requests')]
    #[Description('429 Too Many Requests: The user has sent too many requests in a given amount of time.')]
    public const TOO_MANY_REQUESTS = 429;

    /**
     * 431 Request Header Fields Too Large.
     *
     * @var int
     */
    #[Label('Request Header Fields Too Large')]
    #[Description('431 Request Header Fields Too Large: The server is unwilling to process the request because one or more header fields are too large.')]
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * 451 Unavailable For Legal Reasons.
     *
     * @var int
     */
    #[Label('Unavailable For Legal Reasons')]
    #[Description('451 Unavailable For Legal Reasons: The resource is unavailable due to legal reasons.')]
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Server Error 5xx
     * 500 Internal Server Error.
     *
     * @var int
     */
    #[Label('Internal Server Error')]
    #[Description('500 Internal Server Error: The server encountered an unexpected condition that prevented it from fulfilling the request.')]
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * 501 Not Implemented.
     *
     * @var int
     */
    #[Label('Not Implemented')]
    #[Description('501 Not Implemented: The server does not support the functionality required to fulfill the request.')]
    public const NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway.
     *
     * @var int
     */
    #[Label('Bad Gateway')]
    #[Description('502 Bad Gateway: The server, while acting as a gateway or proxy, received an invalid response from the upstream server.')]
    public const BAD_GATEWAY = 502;

    /**
     * 503 Service Unavailable.
     *
     * @var int
     */
    #[Label('Service Unavailable')]
    #[Description('503 Service Unavailable: The server is currently unable to handle the request due to a temporary overload or maintenance.')]
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout.
     *
     * @var int
     */
    #[Label('Gateway Timeout')]
    #[Description('504 Gateway Timeout: The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server.')]
    public const GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported.
     *
     * @var int
     */
    #[Label('HTTP Version Not Supported')]
    #[Description('505 HTTP Version Not Supported: The server does not support the HTTP protocol version used in the request.')]
    public const VERSION_NOT_SUPPORTED = 505;

    /**
     * 506 Variant Also Negotiates.
     *
     * @var int
     */
    #[Label('Variant Also Negotiates')]
    #[Description('506 Variant Also Negotiates: The server has an internal configuration error: transparent content negotiation for the request results in a circular reference.')]
    public const VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * 507 Insufficient Storage.
     *
     * @var int
     */
    #[Label('Insufficient Storage')]
    #[Description('507 Insufficient Storage: The server is unable to store the representation needed to complete the request.')]
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * 508 Loop Detected.
     *
     * @var int
     */
    #[Label('Loop Detected')]
    #[Description('508 Loop Detected: The server detected an infinite loop while processing a request.')]
    public const LOOP_DETECTED = 508;

    /**
     * 510 Not Extended.
     *
     * @var int
     */
    #[Label('Not Extended')]
    #[Description('510 Not Extended: Further extensions to the request are required for the server to fulfill it.')]
    public const NOT_EXTENDED = 510;
}
