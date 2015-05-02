<?php

namespace DP\Request;

abstract class AbstractRequestMethod
{
    abstract function createRequest();

    public function getRequestMethod()
    {
        return $this->createRequest();
    }
} 