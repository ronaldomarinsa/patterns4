<?php

namespace DP\Form;

class Select extends AbstractForm
{
    protected $options;

    public function setOptions(array $options) 
    {
        foreach ($options as $value => $option) {
            $this->options .= "<option value=\"{$value}\">{$option}</option>";
        }
        
        return $this;
    }
    
    public function render($name = null)
    {
        $html = '<select';

        foreach ($this->attributes as $name => $value) {
            $html .= " {$name}=\"{$value}\"";
        }

        $html .= '>';

        $html .= $this->options;

        $html .= '</select>';
        
        return $html;
    }

    public function createField(AbstractForm $field)
    {
        throw new \DomainException('Voce nao pode adicionar campos a esse campo');
    }
}
