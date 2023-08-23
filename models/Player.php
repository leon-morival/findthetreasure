<?php
require_once 'Chest.php';
require_once 'Monster.php'; // Assurez-vous d'inclure correctement la classe Monster

if (!isset($_SESSION['monsters'])) {
    $_SESSION['monsters'] = generateMonsters(25);
}

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

        // Récupération des monstres depuis la session et affichage
        echo '<pre>';
        print_r($_SESSION['monsters']);
        echo '</pre>';

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