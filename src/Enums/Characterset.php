<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing various character sets for Google Fonts.
 *
 * @method static self CYRILLIC() Represents the Cyrillic character set.
 * @method static self CYRILLIC_EXT() Represents the Cyrillic Extended character set.
 * @method static self GREEK() Represents the Greek character set.
 * @method static self GREEK_EXT() Represents the Greek Extended character set.
 * @method static self KHMER() Represents the Khmer character set.
 * @method static self LATIN() Represents the Latin character set.
 * @method static self LATIN_EXT() Represents the Latin Extended character set.
 * @method static self VIETNAMESE() Represents the Vietnamese character set.
 */
class Characterset extends Enum
{
    /**
     * Represents the Cyrillic character set.
     */
    #[Label('Cyrillic')]
    #[Description('Cyrillic character set used for various Slavic languages.')]
    public const CYRILLIC = 'cyrillic';

    /**
     * Represents the Cyrillic Extended character set.
     */
    #[Label('Cyrillic Extended')]
    #[Description('Extended Cyrillic character set used for additional characters.')]
    public const CYRILLIC_EXT = 'cyrillic-ext';

    /**
     * Represents the Greek character set.
     */
    #[Label('Greek')]
    #[Description('Greek character set used for the Greek language.')]
    public const GREEK = 'greek';

    /**
     * Represents the Greek Extended character set.
     */
    #[Label('Greek Extended')]
    #[Description('Extended Greek character set used for additional characters.')]
    public const GREEK_EXT = 'greek-ext';

    /**
     * Represents the Khmer character set.
     */
    #[Label('Khmer')]
    #[Description('Khmer character set used for the Khmer language.')]
    public const KHMER = 'khmer';

    /**
     * Represents the Latin character set.
     */
    #[Label('Latin')]
    #[Description('Latin character set used for various Western languages.')]
    public const LATIN = 'latin';

    /**
     * Represents the Latin Extended character set.
     */
    #[Label('Latin Extended')]
    #[Description('Extended Latin character set used for additional characters.')]
    public const LATIN_EXT = 'latin-ext';

    /**
     * Represents the Vietnamese character set.
     */
    #[Label('Vietnamese')]
    #[Description('Vietnamese character set used for the Vietnamese language.')]
    public const VIETNAMESE = 'vietnamese';
}
