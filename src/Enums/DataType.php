<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing common data types.
 *
 * @method static self STRING() String data type.
 * @method static self INTEGER() Integer data type.
 * @method static self INT() Integer data type.
 * @method static self FLOAT() Float data type.
 * @method static self BOOLEAN() Boolean data type.
 * @method static self ARRAY() Array data type.
 * @method static self OBJECT() Object data type.
 * @method static self NULL() Null data type.
 * @method static self RESOURCE() Resource data type.
 * @method static self CALLABLE() Callable data type.
 * @method static self MIXED() Mixed data type.
 */
class DataType extends Enum
{
    /**
     * String data type.
     */
    #[Label('String')]
    #[Description('Represents the string data type.')]
    public const STRING = 'string';

    /**
     * Integer data type.
     */
    #[Label('Integer')]
    #[Description('Represents the integer data type.')]
    public const INTEGER = 'integer';

    /**
     * Integer data type (alternative).
     */
    #[Label('Int')]
    #[Description('Represents the integer data type (alternative name).')]
    public const INT = 'int';

    /**
     * Float data type.
     */
    #[Label('Float')]
    #[Description('Represents the float data type.')]
    public const FLOAT = 'float';

    /**
     * Boolean data type.
     */
    #[Label('Boolean')]
    #[Description('Represents the boolean data type.')]
    public const BOOLEAN = 'boolean';

    /**
     * Array data type.
     */
    #[Label('Array')]
    #[Description('Represents the array data type.')]
    public const ARRAY = 'array';

    /**
     * Object data type.
     */
    #[Label('Object')]
    #[Description('Represents the object data type.')]
    public const OBJECT = 'object';

    /**
     * Null data type.
     */
    #[Label('Null')]
    #[Description('Represents the null data type.')]
    public const NULL = 'null';

    /**
     * Resource data type.
     */
    #[Label('Resource')]
    #[Description('Represents the resource data type.')]
    public const RESOURCE = 'resource';

    /**
     * Callable data type.
     */
    #[Label('Callable')]
    #[Description('Represents the callable data type.')]
    public const CALLABLE = 'callable';

    /**
     * Mixed data type.
     */
    #[Label('Mixed')]
    #[Description('Represents the mixed data type.')]
    public const MIXED = 'mixed';
}
