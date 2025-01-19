<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Block class for rendering content in a Magento template.
 *
 * This class extends Magento's Template class to provide a block that can be used in
 * the frontend to render content. The constructor ensures that the context and
 * additional data are passed to the parent class.
 */
class Block extends Template
{
    /**
     * Block constructor.
     *
     * Initializes the block with the given context and data array.
     *
     * @param Context $context Context for the block, including view and layout dependencies.
     * @param array $data Additional data to pass to the template.
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}
