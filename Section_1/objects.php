<?php

class Team
{
    protected $name;
    protected $members =[];

    public function __construct($name , $members)
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new self(...$params);
    }

    public function members()
    {
        return $this->members;
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$sarahteam = Team::start('sarah',[
    new Member('aaa'),
    new Member('bbb'),
    ]);
var_dump($sarahteam);
?>