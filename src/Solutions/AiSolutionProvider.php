<?php

declare(strict_types=1);

namespace Maginium\Foundation\Solutions;

use Maginium\Framework\Support\Facades\Container;
use Spatie\Ignition\Contracts\HasSolutionsForThrowable;
use Throwable;

/**
 * Class AiSolutionProvider.
 *
 * This class implements the HasSolutionForThrowable interface to provide
 * solutions for throwable exceptions in the Maginium Integration .
 */
class AiSolutionProvider implements HasSolutionsForThrowable
{
    /**
     * Determines if the provider can solve the given throwable.
     *
     * @param  Throwable  $throwable  The throwable exception to check.
     *
     * @return bool True if the provider can solve the throwable; otherwise, false.
     */
    public function canSolve(Throwable $throwable): bool
    {
        // Currently returns true for all throwables; modify as needed for specific conditions.
        return true;
    }

    /**
     * Retrieves an array of solutions for the given throwable.
     *
     * @param  Throwable  $throwable  The throwable exception for which to retrieve solutions.
     *
     * @return array An array of solutions corresponding to the throwable.
     */
    public function getSolutions(Throwable $throwable): array
    {
        // Return an array containing a new AiSolution instance for the given throwable.
        return Container::make(AiSolution::class, ['throwable' => $throwable]);
    }
}
