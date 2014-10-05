<?php

namespace DP\Form;

class Select implements InterfaceFormElement
{
    protected $select;
    protected $attributes = array();
    protected $options;
    protected $name;
    
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
        $this->select = '<select';
        
        foreach ($this->attributes as $name => $value) {
            $this->select .= " {$name}=\"{$value}\"";
        }
        
        $this->select .= '>';
    }
    
    private function closeTag()
    {
        $this->select .= '</select>';
    }
    
    public function setOptions(array $options) 
    {
        foreach ($options as $value => $option) {
            $this->options .= "<option value=\"{$value}\">{$option}</option>";
        }
        
        return $this;;
    }

    public function setAttribute($name, $value) 
    {
        $this->attributes[$name] = $value;
        return $this;
    }
    
    public function render() 
    {
        $this->openTag();
        $this->select .= $this->options;
        $this->closeTag();
        
        return $this->select;
    }
}
