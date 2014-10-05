<?php

namespace DP\Form;

class Input implements InterfaceFormElement
{
    private $input;
    private $attributes = array();
    private $name;

    public function __construct($name) 
    {
        $this->name = $name;
        $this->attributes['name'] = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }


    private function openTag() 
    {
        $this->input = '<input';
        
        foreach($this->attributes as $name => $valor) {
            $this->input .= " {$name}=\"$valor\"";            
        }
    }
    
    private function closeTag() 
    {
        $this->input .= '>';
    }
    
    public function setAttribute($name, $value) 
    {
        $this->attributes[$name] = $value;
        return $this;
    }
    
    public function render() 
    {
        $this->openTag();
        $this->closeTag();
        return $this->input;
    }
}