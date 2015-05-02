<?php

namespace DP\Request;

class FactoryGet extends AbstractRequestMethod
{
    public function createRequest()
    {
        return new Get();
    }
} 