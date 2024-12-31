<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing common model actions/events.
 * Used to define events that can occur on models such as saving, loading, deleting, etc.
 *
 * @method static self SAVE() Saving the model.
 * @method static self DELETE() Deleting the model.
 * @method static self LOAD() Loading the model.
 * @method static self MASS_DELETE() Mass-deleting a set of models.
 * @method static self DUPLICATE() Duplicating the model.
 */
class EventTypes extends Enum
{
    /**
     * Saving the model.
     * Triggered when an model is about to be saved to the database.
     */
    #[Label('Save')]
    #[Description('Triggered when an model is about to be saved to the database.')]
    public const SAVE = 'save';

    /**
     * Deleting the model.
     * Triggered when an model is about to be deleted from the database.
     */
    #[Label('Delete')]
    #[Description('Triggered when an model is about to be deleted from the database.')]
    public const DELETE = 'delete';

    /**
     * Loading the model.
     * Triggered when an model is being loaded from the database.
     */
    #[Label('Load')]
    #[Description('Triggered when an model is being loaded from the database.')]
    public const LOAD = 'load';

    /**
     * Mass-deleting models.
     * Triggered when a set of models are about to be deleted in bulk.
     */
    #[Label('Mass Delete')]
    #[Description('Triggered when a set of models are about to be deleted in bulk.')]
    public const MASS_DELETE = 'mass_delete';

    /**
     * Duplicating the model.
     * Triggered when an model is being duplicated.
     */
    #[Label('Duplicate')]
    #[Description('Triggered when an model is being duplicated.')]
    public const DUPLICATE = 'duplicate';
}
