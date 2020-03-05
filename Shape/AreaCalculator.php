<?php


namespace Shape;

require_once 'Square.php';
require_once 'Circle.php';
require_once 'ShapeInterface.php';

class AreaCalculator
{
    private $shapes;

    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape){
            $area[] = $shape->area();
        }

        return array_sum($area);
    }

    public function addElement(ShapeInterface $shape)    
    {
        $this->shapes[] = $shape;
    }

    public function getShapes()
    {
        return $this->shapes;
    }
}

$areaCalculator = new AreaCalculator();
$areaCalculator->addElement(new Circle(2));
$areaCalculator->addElement(new Square(2,3));

var_dump($areaCalculator->calculate($areaCalculator->getShapes()));