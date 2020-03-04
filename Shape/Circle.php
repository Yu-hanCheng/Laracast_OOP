<?php

namespace Shape;

require_once 'ShapeInterface.php';

class Circle implements ShapeInterface
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function area()
    {
        return $area[] = $this->radius * $this->radius * pi();
    }
}