<?php

namespace DP\Validator;

class InArray extends AbstractValidator
{    
    protected $data;

    public function isValid()
    {
        if(!in_array($this->value, $this->data)) {
            $this->message = "The value {$this->value} is not valid";
            return false;
        }
        
        return true;
    }
    
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }
}