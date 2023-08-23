<?php
session_start();
require_once '../models/Player.php';

$player = new Player();
$chest = new Chest();
// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);
    // Imprimez le tableau de monstres pour vérifier
    

}


function generateMonsters($numberOfMonsters)
{
    $monsters = array();

    // Générer toutes les positions possibles
    $allPositions = array();
    for ($x = 0; $x <= 20; $x++) {
        for ($y = 0; $y <= 20; $y++) {
            $allPositions[] = array($x, $y);
        }
    }

    // Mélanger aléatoirement les positions
    shuffle($allPositions);

    // Attribuer les positions aux monstres
    for ($i = 0; $i < $numberOfMonsters; $i++) {
        $position = array_shift($allPositions);
        $positionX = $position[0];
        $positionY = $position[1];

        $monster = new Monster($positionX, $positionY);
        $monsters[] = $monster;
    }

    return $monsters;
}



// Include the view
require_once '../views/view.php';
