<?php

namespace DP\Request;

class FactoryPost extends AbstractRequestMethod
{
    public function createRequest()
    {
        return new Post();
    }

} 