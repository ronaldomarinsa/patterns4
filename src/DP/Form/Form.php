<?php

namespace DP\Form;

class Form 
{
    protected $attributes = array();
    protected $html;

    public function openTag() 
    {
        $this->html = '<form';
        foreach($this->attributes as $key => $value) {
            $this->html .= " {$key}=\"{$value}\"";
        }
        $this->html .= '>';
    }
    
    public function closeTag() 
    {
        $this->html .= '</form>';
    }
    
    public function setAttribute($attrib, $value) 
    {
        $this->attributes[$attrib] = $value;
    }
    
    public function render() 
    {
        return $this->html;
    }
}