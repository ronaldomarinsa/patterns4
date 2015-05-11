<?php

namespace DP\Form;

class FieldSet extends AbstractForm implements RenderTagsInterface
{

    public function openTag()
    {
        $html = '<fieldset';

        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"$value\"";
        }

        return $html .= '>';
    }

    public function closeTag()
    {
        return '</fieldset>';
    }
}
