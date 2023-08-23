<?php
session_start();
require_once '../models/Player.php';
require_once '../models/Monster.php';
require_once '../models/Fight.php';
$monster = new Monster();
$player = new Player();
$chest = new Chest();

$monster->getMonsters();
// var_dump($monster->getMonsters());
$playerX = $player->getPositionX();
$playerY = $player->getPositionY();

$chestX = $chest->getPositionX();
$chestY = $chest->getPositionY();

// Compare positions and display message if they are the same
// header('Location: ' . $_SERVER['PHP_SELF']);
function findChest()
{
    global $playerX;
    global $playerY;
    global $chestX;
    global $chestY;
    if ($playerX === $chestX && $playerY === $chestY) {
        echo "Congratulations! You found the chest!";
        echo "player position : " . $playerX . ' ' . $playerY;
        echo '<br>';
        echo "chest position : " . $chestX . ' ' . $chestY;
    } else {
        echo "Keep exploring...";
    }
}


$fight = new Fight();
// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);

    foreach ($monster->getMonsters() as $key => $monster) {
        if ($player->getPositionX() == $monster['positionX'] && $player->getPositionY() == $monster['positionY']) {
            // Commencez le combat entre le joueur et le monstre
            $result = $fight->startFight($player, $monster);

            // Vous pouvez traiter le résultat du combat ici, comme ajuster les points de vie du joueur et du monstre, etc.


            // Retirez le monstre de la liste s'il a été vaincu ou autre action nécessaire
            unset($_SESSION['monsters'][$key]);
        }
    }
} elseif (isset($_GET['reset']) && $_GET['reset'] === 'true') {
    session_unset(); // Clear all session variables
    session_destroy(); // Destroy the session
    session_start(); // Start a new session
    header('Location: ' . $_SERVER['PHP_SELF']);
}



// Include the view
require_once '../views/view.php';
