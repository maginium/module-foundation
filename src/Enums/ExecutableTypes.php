<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing different types of executables.
 *
 * @method static self NPM() Represents the NPM executable.
 * @method static self YARN() Represents the Yarn executable.
 * @method static self TSX() Represents the TSX executable.
 * @method static self NODE() Represents the Node.js executable.
 * @method static self PHP() Represents the PHP executable.
 */
class ExecutableTypes extends Enum
{
    /**
     * Represents the NPM executable.
     */
    #[Label('NPM Executable')]
    #[Description('Represents the NPM executable.')]
    public const NPM = 'npm';

    /**
     * Represents the Yarn executable.
     */
    #[Label('Yarn Executable')]
    #[Description('Represents the Yarn executable.')]
    public const YARN = 'yarn';

    /**
     * Represents the TSX executable.
     */
    #[Label('TSX Executable')]
    #[Description('Represents the TSX executable.')]
    public const TSX = 'tsx';

    /**
     * Represents the Node.js executable.
     */
    #[Label('Node.js Executable')]
    #[Description('Represents the Node.js executable.')]
    public const NODE = 'node';

    /**
     * Represents the PHP executable.
     */
    #[Label('PHP Executable')]
    #[Description('Represents the PHP executable.')]
    public const PHP = 'php';
}
