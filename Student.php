<?php

include ('./People.php');
include ('./PeopleInterface.php');
include ('./PeopleTrait.php');

class Student extends People implements PeopleInterface
{
    use PeopleTrait;

    private $name;
    private $height;

    public function __construct($name, $height = 1.65, $weight = 60)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    function getName()
    {
        return $this->name;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWeight()
    {
        return PeopleInterface::WEIGHT;
    }

    public function getResponsibility()
    {
        return 'Play game :)';
    }
}