<?php


namespace Shape;

require_once 'Square.php';
require_once 'Circle.php';
require_once 'ShapeInterface.php';

class AreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape){
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

var_dump((new AreaCalculator())->calculate([new Square(2,4),new Circle(3)]));