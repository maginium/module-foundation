<?php

declare(strict_types=1);

namespace Maginium\Foundation\Models\Config\Source;

use Illuminate\Contracts\Support\Arrayable;
use Magento\Framework\Data\OptionSourceInterface;
use Maginium\Foundation\Concerns\HasOptionSource;
use Maginium\Foundation\Enums\GoogleFont;

/**
 * Google Fonts Configuration Source.
 *
 * Provides a list of Google Fonts as options for configuration settings.
 * This class extends the base behavior of AbstractOptionSource to supply
 * Google Font options dynamically.
 */
class GoogleFonts implements Arrayable, OptionSourceInterface
{
    use HasOptionSource;

    /**
     * Retrieve Google Font options as an associative array.
     *
     * This method fetches the available Google Font options defined in the
     * GoogleFont enum class, returning them in a "key-value" format.
     *
     * @return array<string, string> An associative array of Google Font options,
     *                               where the key represents the font identifier
     *                               and the value represents the font name.
     */
    public function toArray(): array
    {
        return GoogleFont::asSelectArray();
    }
}
