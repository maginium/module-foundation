<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interfaces;

use Spatie\Ignition\Contracts\Solution as BaseSolutionInterface;

/**
 * Interface for defining a solution with a title, description, and documentation links.
 *
 * This interface extends Spatie's `Solution` contract, adding constants to standardize
 * the keys for the solution's metadata.
 */
interface SolutionInterface extends BaseSolutionInterface
{
    /**
     * Key representing the solution's title.
     */
    public const TITLE = 'title';

    /**
     * Key representing the solution's description.
     */
    public const DESCRIPTION = 'description';

    /**
     * Key representing the solution's documentation links.
     */
    public const LINKS = 'links';
}
