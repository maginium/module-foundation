<?php

declare(strict_types=1);

namespace Maginium\Foundation\Solutions;

use Spatie\ErrorSolutions\Contracts\BaseSolution as SpatieBaseSolution;
use Spatie\Ignition\Contracts\Solution as SolutionInterface;

/**
 * Class Solution.
 *
 * Provides functionality to manage a solution's title, description, and documentation links.
 */
class Solution extends SpatieBaseSolution implements SolutionInterface
{
    /**
     * The key for the solution's title.
     *
     * @var string
     */
    public const KEY_TITLE = 'title';

    /**
     * The key for the solution's description.
     *
     * @var string
     */
    public const KEY_DESCRIPTION = 'description';

    /**
     * The key for the solution's documentation links.
     *
     * @var string
     */
    public const KEY_LINKS = 'links';

    /**
     * Set the solution's data based on the provided associative array.
     *
     * @param  array  $data  An associative array containing solution data (title, description, and links).
     */
    public function setData(array $data = []): static
    {
        // Set the title, defaulting to the current title if not provided
        $this->setSolutionTitle($data[self::KEY_TITLE] ?? $this->title);

        // Set description if it exists in the data
        if (isset($data[self::KEY_DESCRIPTION])) {
            $this->setSolutionDescription($data[self::KEY_DESCRIPTION]);
        }

        // Set documentation links if they exist in the data
        if (isset($data[self::KEY_LINKS])) {
            $this->setDocumentationLinks($data[self::KEY_LINKS]);
        }

        return $this;
    }
}
