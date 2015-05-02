<?php

namespace DP\Validator;

class StringLength extends AbstractValidator
{    
    protected $max;
    protected $min;

    public function __construct($max = null, $min = null)
    {
        $this->setMax($max);
        $this->setMin($min);
    }
    
    public function isValid()
    {
        if($this->max !== null && strlen($this->value) > $this->max) {
            $this->message = "The value must be less or equal to {$this->max}";
            return false;
        }
        
        if($this->min !== null && strlen($this->value) < $this->min) {
            $this->message = "The value must be greater or equal to {$this->min}";
            return false;
        }
        
        return true;
    }
    
    public function getMax()
    {
        return $this->max;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMax($max)
    {
        if($max !== null && !is_int($max)) {
            throw new \InvalidArgumentException('The parameter max must be integer');
        }        
        $this->max = $max;
        return $this;
    }

    public function setMin($min)
    {
        if($min !== null && !is_int($min)) {
            throw new \InvalidArgumentException('The parameter min must be integer');
        }        
        $this->min = $min;
        return $this;
    }
}