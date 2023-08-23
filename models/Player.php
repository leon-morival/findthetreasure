<?php
require_once 'Chest.php';
require_once 'Monster.php'; // Assurez-vous d'inclure correctement la classe Monster

class Player
{

    private $chestX;
    private $positionX;
    private $positionY;
    private $xp;
    private $power;

    public function __construct()
    {

        $this->positionX = rand(0, 20);
        $this->positionY = rand(0, 20);
        if (isset($_SESSION['playerPositionX'])) {
            $this->positionX = $_SESSION['playerPositionX'];
            $this->positionY = $_SESSION['playerPositionY'];
        } else {
            // Set initial position
            $this->positionX = rand(0, 20);
            $this->positionY = rand(0, 20);
            $_SESSION['playerPositionX'] = $this->positionX;
            $_SESSION['playerPositionY'] = $this->positionY;
        }
        $this->xp = 0;
        $this->power = rand(50, 100);
        $this->pv = rand(50, 100);
    }


    public function move($direction)
    {
        switch ($direction) {
            case 0:

                if ($this->positionY > 1) {
                    $this->positionY--;
                }

                break;
            case 1:
                if ($this->positionX < 20) {
                    $this->positionX++;
                }
                break;
            case 2:
                if ($this->positionY < 20) {
                    $this->positionY++;
                }
                break;
            case 3:
                if ($this->positionX > 1) {
                    $this->positionX--;
                }
                break;
        }
        $_SESSION['playerPositionX'] = $this->positionX;
        $_SESSION['playerPositionY'] = $this->positionY;
    }

    function getPositionX()
    {
        return  $this->positionX;
    }

    function getPositionY()
    {
        return $this->positionY;
    }

    function getPV()
    {
        return $this->pv;
    }
    function getPower()
    {
        return $this->power;
    }

    function getXp()
    {
        return $this->xp;
    }
}

// Usage