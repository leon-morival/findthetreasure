<?php
require_once 'Chest.php';

require_once 'Monster.php';
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

        $monster = new Monster([5, 10]);
        $monsterArray = $monster->generateMonsters([5, 10]);

        echo ('<br>');
        foreach ($monsterArray as $monsters) {

            if (($this->positionX == $monsters->getPositionX()) && ($this->positionY == $monsters->getPositionY())) {


                echo "Le combat commence";

                reset($monsterArray);
            } else {
                echo "Position (" . $monsters->getPositionX() . ', ' . $monsters->getPositionY() . ')';
            }
        }




        $this->xp = 0;
        $this->power = rand(50, 100);
    }


    public function move($direction)
    {
        switch ($direction) {
            case 0:

                if ($this->positionY < 20) {
                    $this->positionY++;
                }

                break;
            case 1:
                if ($this->positionX < 20) {
                    $this->positionX++;
                }
                break;
            case 2:
                if ($this->positionY > 0) {
                    $this->positionY--;
                }
                break;
            case 3:
                if ($this->positionX > 0) {
                    $this->positionX--;
                }
                break;
        }
        $_SESSION['playerPositionX'] = $this->positionX;
        $_SESSION['playerPositionY'] = $this->positionY;

        // // Check if the player is on a monster's position and take action
        // $monsters = new Monster();
        // $monsterArray = $monsters->generateMonsters();

        // foreach ($monsterArray as $monster) {
        //     if ($this->positionX == $monster->getPositionX() && $this->positionY == $monster->getPositionY()) {
        //         // Handle collision with monster, e.g., reduce player's health or take other actions
        //         // You can also reset the player's position if needed
        //         $this->positionX = rand(0, 20);
        //         $this->positionY = rand(0, 20);
        //         break;
        //     }
        // }
    }

    function getPositionX()
    {
        return  $this->positionX;
    }

    function getPositionY()
    {
        return $this->positionY;
    }
}

// Usage