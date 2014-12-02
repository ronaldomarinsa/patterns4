<?php

namespace DP\Form;

use DP\Validator\Validator;

class Form extends AbstractForm
{
    protected $validator;

    public function __construct(Validator $validator, $name)
    {
        $this->validator = $validator;
        parent::__construct($name);
    }
    
    public function openTag()
    {
        $form = '<form';
        foreach($this->attributes as $name => $value) {
            $form .= " {$name}=\"{$value}\"";
        }
        $form .= '>';
        return $form;
    }
    
    public function closeTag()
    {
        return '</form>';
    }

    public function render($name = null)
    {
        foreach($this->fields as $key => $field) {
            if($field->getName() == $name) {
                unset($this->fields[$key]);
                return $field->render();
            }
        }
    }
}