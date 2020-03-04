<?php

namespace Shape;

class Square
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function areaCalculate()
    {
       return $this->width * $this->height;
    }
}

echo (new Square(2,4))->areaCalculate();
