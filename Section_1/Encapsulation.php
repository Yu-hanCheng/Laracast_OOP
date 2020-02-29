<?php

class Person
{
    public $name;    

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function thingsThatKeep()
    {
        return 'You are the best!';
    }
}

$method = new \ReflectionMethod(Person::class, 'thingsThatKeep');
echo $method;
$method->setAccessible(true);

$person = new Person('Sarah');
echo $method->invoke($person);