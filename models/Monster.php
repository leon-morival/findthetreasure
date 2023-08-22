<?php

class Monster
{
    private $pv;
    private $force;
    private $positionX;
    private $positionY;

    public function __construct($x, $y)
    {
        $this->pv = rand(0, 10);
        $this->force = rand(0, 20);
        $this->positionX = $x;
        $this->positionY = $y;
    }

    public function getPV()
    {
        return $this->pv;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getPositionX()
    {
        return $this->positionX;
    }

    public function getPositionY()
    {
        return $this->positionY;
    }
}
