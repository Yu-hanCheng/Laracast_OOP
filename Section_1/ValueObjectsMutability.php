<?php

// Avoids primitive obsession - and readability
// Helps with consistency
// Immutable

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

    public function increment_mutable()
    {
        $this->age+=2;
    }

    public function increment()
    {
        return new self($this->age++);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age_2 = $age->increment();
var_dump($age);
var_dump($age_2);

// function register(string $name, Age $age)
// {
//     var_dump($age);
// }
// register('sarah',new Age(50));