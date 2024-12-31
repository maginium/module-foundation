<?php

declare(strict_types=1);

namespace Maginium\Foundation\Models\Config\Source;

use Illuminate\Contracts\Support\Arrayable;
use Magento\Framework\Data\OptionSourceInterface;
use Maginium\Foundation\Concerns\HasOptionSource;
use Maginium\Foundation\Enums\Characterset as EnumCharacterset;

/**
 * Character Set Configuration Source.
 *
 * Provides a list of character sets as options for configuration settings.
 * This class extends the base behavior of AbstractOptionSource to supply
 * character set options dynamically.
 */
class Characterset implements Arrayable, OptionSourceInterface
{
    use HasOptionSource;

    /**
     * Retrieve character set options as an associative array.
     *
     * This method fetches the available character set options defined in the
     * EnumCharacterset enum class, returning them in a "key-value" format.
     *
     * @return array<string, string> An associative array of character set options,
     *                               where the key represents the character set identifier
     *                               and the value represents the character set description.
     */
    public function toArray(): array
    {
        return EnumCharacterset::asSelectArray();
    }
}
