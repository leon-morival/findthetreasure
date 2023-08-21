<?php

class Monster {
    private $pv;
    private $force;
    private $positionX;
    private $positionY;

    public function __construct() {
        $this->pv = rand(0, 10);
        $this->force = rand(0, 20);
        $this->positionX = rand(0, 20);
        $this->positionY = rand(0, 20);
    }

    public function getPV() {
        return $this->pv;
    }

    public function getForce() {
        return $this->force;
    }

    public function getPositionX() {
        return $this->positionX;
    }

    public function getPositionY() {
        return $this->positionY;
    }

    public function generateMonsters() {
        $nombreMonstres = rand(10, 50); // Nombre aléatoire de monstres

        $monstres = array(); // Tableau pour stocker les monstres générés

        for ($i = 0; $i < $nombreMonstres; $i++) {
            do {
                $positionX = rand(0, 20); // Coordonnée X aléatoire
                $positionY = rand(0, 20); // Coordonnée Y aléatoire
                $positionOccupee = false;

                foreach ($monstres as $monstre) {
                    if ($monstre->getPositionX() === $positionX && $monstre->getPositionY() === $positionY) {
                        $positionOccupee = true;
                        break;
                    }
                }
            } while ($positionOccupee);

            $monstre = new Monster();
            array_push($monstres, $monstre);
        }

        return $monstres; // Retourner le tableau de monstres générés
    }
}



?>
