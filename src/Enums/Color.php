<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum for color palettes.
 *
 * This enum defines various color palettes with their swatches,
 * categorized by light, regular, and dark shades.
 *
 * @method static self GRAY_100() Represents the lightest gray color (#f7fafc).
 * @method static self GRAY_500() Represents the regular gray color (#a0aec0).
 * @method static self GRAY_900() Represents the darkest gray color (#1a202c).
 * @method static self RED_100() Represents the lightest red color (#fff5f5).
 * @method static self RED_500() Represents the regular red color (#f56565).
 * @method static self RED_900() Represents the darkest red color (#742a2a).
 * @method static self ORANGE_100() Represents the lightest orange color (#fffaf0).
 * @method static self ORANGE_500() Represents the regular orange color (#ed8936).
 * @method static self ORANGE_900() Represents the darkest orange color (#7b341e).
 * @method static self YELLOW_100() Represents the lightest yellow color (#fffff0).
 * @method static self YELLOW_500() Represents the regular yellow color (#ecc94b).
 * @method static self YELLOW_900() Represents the darkest yellow color (#744210).
 * @method static self GREEN_100() Represents the lightest green color (#f0fff4).
 * @method static self GREEN_500() Represents the regular green color (#48bb78).
 * @method static self GREEN_900() Represents the darkest green color (#22543d).
 * @method static self TEAL_100() Represents the lightest teal color (#e6fffa).
 * @method static self TEAL_500() Represents the regular teal color (#38b2ac).
 * @method static self TEAL_900() Represents the darkest teal color (#234e52).
 * @method static self BLUE_100() Represents the lightest blue color (#ebf8ff).
 * @method static self BLUE_500() Represents the regular blue color (#4299e1).
 * @method static self BLUE_900() Represents the darkest blue color (#2a4365).
 * @method static self INDIGO_100() Represents the lightest indigo color (#ebf4ff).
 * @method static self INDIGO_500() Represents the regular indigo color (#667eea).
 * @method static self INDIGO_900() Represents the darkest indigo color (#3c366b).
 * @method static self PURPLE_100() Represents the lightest purple color (#faf5ff).
 * @method static self PURPLE_500() Represents the regular purple color (#9f7aea).
 * @method static self PURPLE_900() Represents the darkest purple color (#44337a).
 * @method static self PINK_100() Represents the lightest pink color (#fff5f7).
 * @method static self PINK_500() Represents the regular pink color (#ed64a6).
 * @method static self PINK_900() Represents the darkest pink color (#702459).
 */
class Color extends Enum
{
    /**
     * Light Gray color.
     */
    #[Label('Gray 100')]
    #[Description('The lightest gray color (#f7fafc).')]
    public const GRAY_100 = '#f7fafc';

    /**
     * Gray color.
     */
    #[Label('Gray 500')]
    #[Description('The regular gray color (#a0aec0).')]
    public const GRAY_500 = '#a0aec0';

    /**
     * Dark Gray color.
     */
    #[Label('Gray 900')]
    #[Description('The darkest gray color (#1a202c).')]
    public const GRAY_900 = '#1a202c';

    /**
     * Light Red color.
     */
    #[Label('Red 100')]
    #[Description('The lightest red color (#fff5f5).')]
    public const RED_100 = '#fff5f5';

    /**
     * Red color.
     */
    #[Label('Red 500')]
    #[Description('The regular red color (#f56565).')]
    public const RED_500 = '#f56565';

    /**
     * Dark Red color.
     */
    #[Label('Red 900')]
    #[Description('The darkest red color (#742a2a).')]
    public const RED_900 = '#742a2a';

    /**
     * Light Orange color.
     */
    #[Label('Orange 100')]
    #[Description('The lightest orange color (#fffaf0).')]
    public const ORANGE_100 = '#fffaf0';

    /**
     * Orange color.
     */
    #[Label('Orange 500')]
    #[Description('The regular orange color (#ed8936).')]
    public const ORANGE_500 = '#ed8936';

    /**
     * Dark Orange color.
     */
    #[Label('Orange 900')]
    #[Description('The darkest orange color (#7b341e).')]
    public const ORANGE_900 = '#7b341e';

    /**
     * Light Yellow color.
     */
    #[Label('Yellow 100')]
    #[Description('The lightest yellow color (#fffff0).')]
    public const YELLOW_100 = '#fffff0';

    /**
     * Yellow color.
     */
    #[Label('Yellow 500')]
    #[Description('The regular yellow color (#ecc94b).')]
    public const YELLOW_500 = '#ecc94b';

    /**
     * Dark Yellow color.
     */
    #[Label('Yellow 900')]
    #[Description('The darkest yellow color (#744210).')]
    public const YELLOW_900 = '#744210';

    /**
     * Light Green color.
     */
    #[Label('Green 100')]
    #[Description('The lightest green color (#f0fff4).')]
    public const GREEN_100 = '#f0fff4';

    /**
     * Green color.
     */
    #[Label('Green 500')]
    #[Description('The regular green color (#48bb78).')]
    public const GREEN_500 = '#48bb78';

    /**
     * Dark Green color.
     */
    #[Label('Green 900')]
    #[Description('The darkest green color (#22543d).')]
    public const GREEN_900 = '#22543d';

    /**
     * Light Teal color.
     */
    #[Label('Teal 100')]
    #[Description('The lightest teal color (#e6fffa).')]
    public const TEAL_100 = '#e6fffa';

    /**
     * Teal color.
     */
    #[Label('Teal 500')]
    #[Description('The regular teal color (#38b2ac).')]
    public const TEAL_500 = '#38b2ac';

    /**
     * Dark Teal color.
     */
    #[Label('Teal 900')]
    #[Description('The darkest teal color (#234e52).')]
    public const TEAL_900 = '#234e52';

    /**
     * Light Blue color.
     */
    #[Label('Blue 100')]
    #[Description('The lightest blue color (#ebf8ff).')]
    public const BLUE_100 = '#ebf8ff';

    /**
     * Blue color.
     */
    #[Label('Blue 500')]
    #[Description('The regular blue color (#4299e1).')]
    public const BLUE_500 = '#4299e1';

    /**
     * Dark Blue color.
     */
    #[Label('Blue 900')]
    #[Description('The darkest blue color (#2a4365).')]
    public const BLUE_900 = '#2a4365';

    /**
     * Light Indigo color.
     */
    #[Label('Indigo 100')]
    #[Description('The lightest indigo color (#ebf4ff).')]
    public const INDIGO_100 = '#ebf4ff';

    /**
     * Indigo color.
     */
    #[Label('Indigo 500')]
    #[Description('The regular indigo color (#667eea).')]
    public const INDIGO_500 = '#667eea';

    /**
     * Dark Indigo color.
     */
    #[Label('Indigo 900')]
    #[Description('The darkest indigo color (#3c366b).')]
    public const INDIGO_900 = '#3c366b';

    /**
     * Light Purple color.
     */
    #[Label('Purple 100')]
    #[Description('The lightest purple color (#faf5ff).')]
    public const PURPLE_100 = '#faf5ff';

    /**
     * Purple color.
     */
    #[Label('Purple 500')]
    #[Description('The regular purple color (#9f7aea).')]
    public const PURPLE_500 = '#9f7aea';

    /**
     * Dark Purple color.
     */
    #[Label('Purple 900')]
    #[Description('The darkest purple color (#44337a).')]
    public const PURPLE_900 = '#44337a';

    /**
     * Light Pink color.
     */
    #[Label('Pink 100')]
    #[Description('The lightest pink color (#fff5f7).')]
    public const PINK_100 = '#fff5f7';

    /**
     * Pink color.
     */
    #[Label('Pink 500')]
    #[Description('The regular pink color (#ed64a6).')]
    public const PINK_500 = '#ed64a6';

    /**
     * Dark Pink color.
     */
    #[Label('Pink 900')]
    #[Description('The darkest pink color (#702459).')]
    public const PINK_900 = '#702459';
}
