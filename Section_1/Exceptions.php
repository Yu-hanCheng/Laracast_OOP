<?php

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class MaximumMembersReached extends Exception
{

}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) == 3) {
            throw new MaximumMembersReached('You may not add more than 3 team members');
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
        } catch (MaximumMembersReached $e) {
            var_dump($e);
        }

        var_dump($team->members());
    }
}
(new TeamMemberController())->store();