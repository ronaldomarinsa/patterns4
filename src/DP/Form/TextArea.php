<?php

namespace DP\Form;

class TextArea implements InterfaceFormElement
{
    protected $attributes = array();
    protected $textArea;
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
        $this->textArea = '<textarea';
        foreach ($this->attributes as $name => $value) {
            $this->textArea .= " {$name}=\"{$value}\"";
        }
        $this->textArea .= '>';
    }
    
    private function closeTag() 
    {
        $this->textArea .= '</textarea>';
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
        
        return $this->textArea;
    }
}
