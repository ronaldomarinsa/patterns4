<?php

namespace DP\Validator;

use DP\Request\Request;

class Validator 
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}