<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing different HTTP methods.
 *
 * @method static self GET() The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.
 * @method static self POST() The POST method is used to submit an model to the specified resource, often causing a change in state or side effects on the server.
 * @method static self PUT() The PUT method replaces all current representations of the target resource with the request payload.
 * @method static self DELETE() The DELETE method deletes the specified resource.
 * @method static self PATCH() The PATCH method is used to apply partial modifications to a resource.
 * @method static self OPTIONS() The OPTIONS method is used to describe the communication options for the target resource.
 * @method static self HEAD() The HEAD method asks for a response identical to that of a GET request, but without the response body.
 */
class HttpMethods extends Enum
{
    /**
     * The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.
     */
    #[Label('GET')]
    #[Description('The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.')]
    public const GET = 'GET';

    /**
     * The POST method is used to submit an model to the specified resource, often causing a change in state or side effects on the server.
     */
    #[Label('POST')]
    #[Description('The POST method is used to submit an model to the specified resource, often causing a change in state or side effects on the server.')]
    public const POST = 'POST';

    /**
     * The PUT method replaces all current representations of the target resource with the request payload.
     */
    #[Label('PUT')]
    #[Description('The PUT method replaces all current representations of the target resource with the request payload.')]
    public const PUT = 'PUT';

    /**
     * The DELETE method deletes the specified resource.
     */
    #[Label('DELETE')]
    #[Description('The DELETE method deletes the specified resource.')]
    public const DELETE = 'DELETE';

    /**
     * The PATCH method is used to apply partial modifications to a resource.
     */
    #[Label('PATCH')]
    #[Description('The PATCH method is used to apply partial modifications to a resource.')]
    public const PATCH = 'PATCH';

    /**
     * The OPTIONS method is used to describe the communication options for the target resource.
     */
    #[Label('OPTIONS')]
    #[Description('The OPTIONS method is used to describe the communication options for the target resource.')]
    public const OPTIONS = 'OPTIONS';

    /**
     * The HEAD method asks for a response identical to that of a GET request, but without the response body.
     */
    #[Label('HEAD')]
    #[Description('The HEAD method asks for a response identical to that of a GET request, but without the response body.')]
    public const HEAD = 'HEAD';
}
