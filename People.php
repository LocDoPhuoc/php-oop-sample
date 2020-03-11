<?php


abstract class People
{
    public $weight = 50;
    abstract function getName();

    public function getWeight(){
        return $this->weight;
    }
}