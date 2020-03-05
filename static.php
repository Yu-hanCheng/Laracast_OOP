<?php

class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return static::$my_static;
    }

    public function selfValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public static $my_static = 'bar';

    public function fooValue() {
        parent::$my_static = "parent";
        return parent::$my_static;
    }

    public function barSelfValue() {
        return self::$my_static;
    }

    public function barStaticValue() {
        return static::$my_static;
    }
}

$bar = new Bar();
print $bar->fooValue() . "\n";
print $bar->selfValue() . "\n";
print $bar->staticValue() . "\n";
print $bar->barSelfValue() . "\n";
print $bar->barStaticValue() . "\n";
?>