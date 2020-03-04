<?php


namespace Shape;

require_once 'Square.php';

class AreaCalculator
{
    public function calculate($square)
    {
        $area = $square->width * $square->height;
        return $area;
    }
}

echo (new AreaCalculator())->calculate(new Square(2,4));