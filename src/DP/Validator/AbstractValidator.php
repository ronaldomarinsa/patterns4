<?php

namespace DP\Validator;

abstract class AbstractValidator implements ValidatorInterface
{
    protected $value;
    protected $name;
    protected $message;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
    
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
    
    public function getValue()
    {
        return $this->value;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getMessage()
    {
        return $this->message;
    }
}