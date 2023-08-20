<?php

class MonstersGenerator {
    public function generateMonsters($forceJoueur) {
        $nombreMonstres = rand(10, 50); // Nombre aléatoire de monstres

        $monstres = array(); // Tableau pour stocker les monstres générés

        for ($i = 0; $i < $nombreMonstres; $i++) {
            $monstre = array(
                "pv" => rand(0, 20), // Points de vie du monstre
                "force" => rand(0, 10), // Force du monstre
                "positionX" => rand(0, 20), // Coordonnée X du monstre
                "positionY" => rand(0, 20), // Coordonnée Y du monstre
            );
            array_push($monstres, $monstre); // Ajouter le monstre au tableau
        }

        if ($forceJoueur <= $monstre["force"]) {
            // Si la force du joueur est inférieure ou égale à la force du monstre
            // Ajoutez le monstre au tableau
            array_push($monstres, $monstre);
        }

        return $monstres; // Retourner le tableau de monstres générés
    }
}

?>
