<?php

namespace DP\Request;

class Get extends AbstractRequest
{
    public function __construct()
    {
        if(isset($_GET)) {
            $this->data = $_GET;
        }
    }
} 