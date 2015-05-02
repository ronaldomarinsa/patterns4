<?php

namespace DP\Request;

class Post extends AbstractRequest
{
    public function __construct()
    {
        if(isset($_POST)) {
            $this->data = $_POST;
        }
    }
} 