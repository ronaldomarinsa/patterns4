<?php

namespace DP\Form;

use DP\Validator\Validator;

class Form extends AbstractForm
{
    protected $validator;
    protected $data = [];
    
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
    
    public function populate(array $data)
    {
        foreach ($this->fields as $field) {
            if(array_key_exists($field->getName(), $data)) {
                
                if($field instanceof SelectInterface && is_array($data[$field->getName()])) {
                    $field->setValueOptions($data[$field->getName()]);
                } else {
                    $field->setAttribute('value', $data[$field->getName()]);
                }
            }
        }
        
        $this->validator->populate($data);
    }
    
    public function isValid()
    {
        return $this->validator->isValid();
    }
    
    public function getValidator()
    {
        return $this->validator;
    }
}