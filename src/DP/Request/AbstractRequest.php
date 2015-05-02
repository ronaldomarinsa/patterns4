<?php

namespace DP\Request;


class AbstractRequest
{
    protected $data;

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
} 