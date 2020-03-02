<?php

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age<0 || $age > 120) {
            throw new InvalidArgumentException("That makes no sense", 1);
        }
        $this->age = $age;
    }

}

function register(string $name, Age $age)
{
    var_dump($age);
}
register('sarah',new Age(50));