<?php
require 'Chest.php';
require 'Monster.php';
class Player
{
    private $positionX;
    private $positionY;
    private $xp;
    private $power;

    public function __construct()
    {
        $this->positionX = rand(0, 20);
        $this->positionY = rand(0, 20);
        $this->xp = 0;
        $this->power = rand(50, 100);
    }

    public function move($direction)
    {
        switch ($direction) {
            case 0:
                if ($this->positionY == 0 || $this->positionY == 20) break;
                $this->positionY += 1;

                break;
            case 1:
                if ($this->positionX == 0 || $this->positionX == 20) break;
                $this->positionX += 1;
                break;
            case 2:
                if ($this->positionY == 0 || $this->positionY == 20) break;
                $this->positionY -= 1;
                break;
            case 3:
                if ($this->positionX == 0 || $this->positionX == 20) break;
                $this->positionX -= 1;
                break;
        }
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

// Usage
$player = new Player();
