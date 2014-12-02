<?php

namespace DP\Form;

class Input extends AbstractForm
{
    public function render($name = null)
    {
        $html = '<input';

        foreach($this->attributes as $name => $valor) {
            $html .= " {$name}=\"$valor\"";
        }

        $html .= '>';

        return $html;
    }

    public function createField(AbstractForm $field)
    {
        throw new \DomainException('Voce nao pode adicionar campos a esse campo');
    }
}