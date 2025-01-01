<?php

declare(strict_types=1);

namespace Maginium\Foundation\Models\Config\Frontend;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Frontend Color Picker Field.
 *
 * Adds a color picker to Magento system configuration fields.
 */
class Color extends Field
{
    /**
     * Generate the HTML for the color picker field.
     *
     * @param  AbstractElement  $element  The configuration element.
     *
     * @return string The rendered HTML.
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        // Render the default HTML
        $html = parent::_getElementHtml($element);

        // Default to white if no value is set
        $value = $element->getData('value') ?: '#ffffff';

        // Append the color picker script
        $html .= $this->generateColorPickerScript($element->getHtmlId(), $value);

        // Return the rendered HTML
        return $html;
    }

    /**
     * Generate the JavaScript code for initializing the color picker.
     *
     * @param  string  $htmlId  The HTML element ID.
     * @param  string  $value  The initial color value.
     *
     * @return string The JavaScript code block.
     */
    private function generateColorPickerScript(string $htmlId, string $value): string
    {
        return <<<HTML
            <script type="text/javascript">
                require(['jquery', 'jquery/colorpicker/js/colorpicker'], function ($) {
                    $(document).ready(function () {
                        var \$colorField = $("#{$htmlId}");
                        \$colorField.css("backgroundColor", "{$value}");

                        \$colorField.ColorPicker({
                            color: "{$value}",
                            onChange: function (hsb, hex) {
                                \$colorField.css("backgroundColor", "#" + hex).val("#" + hex);
                            }
                        });
                    });
                });
            </script>
        HTML;
    }
}
