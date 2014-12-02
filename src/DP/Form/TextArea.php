<?php

namespace DP\Form;

class TextArea extends AbstractForm
{
    public function render($name = null)
    {
        $html = '<textarea';
        foreach ($this->attributes as $name => $value) {
            $html .= " {$name}=\"{$value}\"";
        }
        $html .= '>';

        $html .= '</textarea>';

        return $html;
    }

    public function createField(AbstractForm $field)
    {
        throw new \DomainException('Voce nao pode adicionar campos a esse campo');
    }
}
