<?php
require 'Monster.php';
class Chest
{
    private $positionY;
    private $positionX;

    public function __construct()
    {
        $this->positionX = rand(0, 20);
        $this->positionY = rand(0, 20);
    }

    function getPositionX()
    {
        return $this->positionX;
    }
    function getPositionY()
    {
        return $this->positionY;
    }
}
