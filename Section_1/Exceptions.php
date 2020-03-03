<?php

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You have too many members');
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) == 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMemberController
{
    public function store()
    {
        $team = new Team;

        try {
            $team->add(new Member('Sarah 1'));
            $team->add(new Member('Sarah 2'));
            $team->add(new Member('Sarah 3'));
            $team->add(new Member('Sarah 4'));
        } catch (Exception $e) {
            var_dump($e);
        }
        var_dump($team->members());
    }
}
(new TeamMemberController())->store();