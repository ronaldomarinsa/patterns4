<?php

namespace DP\Validator;

interface ValidatorInterface
{    
    function isValid();
    
    function setName($name);
    
    function setValue($value);
    
    function setMessage($message);
    
    function getName();
    
    function getValue();
    
    function getMessage();
    
    
}
