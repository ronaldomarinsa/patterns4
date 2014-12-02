<?php

namespace DP\Form;

class FieldSet extends AbstractForm
{
    public function render($name = null)
    {
        $html = '<fieldset';

        foreach($this->attributes as $name => $value) {
            $html .= " $name=\"$value\"";
        }

        $html .= '>';

        foreach($this->fields as $field) {
            $html .= $field->render();
        }

        $html .= '</fieldset>';

        return $html;
    }
} 