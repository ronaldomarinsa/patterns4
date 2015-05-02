<?php

namespace DP\Form;

abstract class AbstractForm
{
    protected $attributes = [] ;
    /**
     * @var AbstractForm | array
     */
    protected $fields = [];
    protected $label;

    public function __construct($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function createField(AbstractForm $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    abstract function render($name = null);
} 