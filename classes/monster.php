<?php

class MonstersGenerator {
    public function generateMonsters() {
        $nombreMonstres = rand(10, 50); // Nombre aléatoire de monstres

        $monstres = array(); // Tableau pour stocker les monstres générés

        for ($i = 0; $i < $nombreMonstres; $i++) {
            do {
                $positionX = rand(0, 20); // Coordonnée X aléatoire
                $positionY = rand(0, 20); // Coordonnée Y aléatoire
                $positionOccupee = false;

                foreach ($monstres as $monstre) {
                    if ($monstre["positionX"] === $positionX && $monstre["positionY"] === $positionY) {
                        $positionOccupee = true;
                        break;
                    }
                }
            } while ($positionOccupee);

            $monstre = array(
                "pv" => rand(0, 20), // Points de vie du monstre
                "force" => rand(0, 10), // Force du monstre
                "positionX" => $positionX, // Coordonnée X du monstre
                "positionY" => $positionY, // Coordonnée Y du monstre
            );

            array_push($monstres, $monstre); // Ajouter le monstre au tableau
        }

        return $monstres; // Retourner le tableau de monstres générés
    }
}
