<?php

namespace DP\Validator;

class Currency extends AbstractValidator
{    
    public function isValid()
    {
        if(!preg_match('/^[0-9]+(,[0-9]{2})?$/', $this->value)) {
            $this->message = "The value {$this->value} is not valid";
            return false;
        }
        
        return true;
    }
}
