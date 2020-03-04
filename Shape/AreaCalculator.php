<?php


namespace Shape;

require_once 'Square.php';
require_once 'Circle.php';

class AreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape){
           if (is_a($shape, 'Shape\Square')) {
                $area[] = $shape->width * $shape->height;
           } elseif (is_a($shape, 'Shape\Circle')) {
                $area[] = $shape->radius * $shape->radius * pi();
           }
        }

        return array_sum($area);
    }
}

var_dump((new AreaCalculator())->calculate([new Square(2,4),new Circle(3)]));