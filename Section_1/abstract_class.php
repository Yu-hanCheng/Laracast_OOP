<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name()));
    }
    abstract public function qualfier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualfier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualfier($user)
    {

    }
}

$achieve = new FirstBestAnswer();
echo $achieve->icon();
?>