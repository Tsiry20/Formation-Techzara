<?php
interface Car
{
    public function getOwner();
}
class Volkswagen implements Car
{
    public $tires;
    protected $whee;
    private $door;

    public function getTires()
    {
        return $this->tires;
    }
    public function getWhee()
    {
        return $this->whee;
    }
    public function getDoor()
    {
        return $this->door;
    }
    public function getOwner()
    {
        return 'Hello world';
    }
}

class Passat extends Volkswagen
{
    public function getTires()
    {
        return $this->tires;
    }
    public function gtWhee()
    {
        return $this->whee;
    }
    public function getDoor()
    {
        return $this->door;
    }
}
