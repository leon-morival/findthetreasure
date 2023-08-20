<?php
require 'Chest.php';


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
        // Monster
        $monster = new Monster();
        $monsterArray = $monster->generateMonsters();

        // echo ('<br>');
        foreach ($monsterArray as $monsters) {

            if (($this->positionX == $monsters->getPositionX()) && ($this->positionY == $monsters->getPositionY())) {

                // echo "<br>";
                // echo "le joueur est sur la case d'un monstre";
                // echo "<br>";
                // echo "position x joueur" . $this->positionX;
                // echo " position y joueur" . $this->positionY;
                // echo "<br>";
                // echo "position x monstre" . $monsters->getPositionX();
                // echo " position y monstre" . $monsters->getPositionY();
                // echo "<br>";
                echo "test";
                $this->positionX = rand(0, 20);
                $this->positionY = rand(0, 20);
                reset($monsterArray);
            } else {
            }

            // echo "le joueur n'est pas sur la case d'un monstre";
            // echo "<br>";
        }




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


        $chest = new Chest(); // Create a new instance of the Chest class
        $chestPositionX = $chest->getPositionX(); // Retrieve the positionX value
        $chestPositionY = $chest->getPositionY();
        while ($chestPositionX == $this->positionX && $chestPositionY == $this->positionY) {
            echo "coffre trouver";
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