<?php
session_start();
require_once '../models/Player.php';

generateMonsters(2);

$player = new Player();
$chest = new Chest();
// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);


    var_dump(generateMonsters(2));
    // Imprimez le tableau de monstres pour vérifier
    

}


function generateMonsters($numberOfMonsters)
{
    $monsters = array();

    for ($i = 0; $i < $numberOfMonsters; $i++) {
        // Utilisation du timestamp actuel pour obtenir des valeurs pseudo-aléatoires
        $positionX = 100 % 21;
        $positionY = ($positionX + $i) % 21; // Utilisation de $i pour varier les valeurs

        $monster = new Monster($positionX, $positionY);
        $monsters[] = $monster;
    }

    return $monsters;
}

// Include the view
require_once '../views/view.php';
