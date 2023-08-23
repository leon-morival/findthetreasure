<?php
session_start();
require_once '../models/Player.php';
require_once '../models/Monster.php';
$monster = new Monster();
$player = new Player();
$chest = new Chest();
$monster->getMonsters();

$playerX = $player->getPositionX();
$playerY = $player->getPositionY();

$chestX = $chest->getPositionX();
$chestY = $chest->getPositionY();

// Compare positions and display message if they are the same


// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);

    if ($playerX === $chestX && $playerY === $chestY) {
        echo "Congratulations! You found the chest!";
        echo "player position : " . $playerX . ' ' . $playerY;
        echo '<br>';
        echo "chest position : " . $chestX . ' ' . $chestY;
    } else {
        echo "Keep exploring...";
    }


    // Imprimez le tableau de monstres pour vérifier


} elseif (isset($_GET['reset']) && $_GET['reset'] === 'true') {
    // Reset the game by generating new values and clearing the session data
    // $player = new Player();
    // $monster = new Monster();
    // $chest = new Chest();

    session_unset(); // Clear all session variables
    session_destroy(); // Destroy the session
    session_start(); // Start a new session
    header('Location: ' . $_SERVER['PHP_SELF']);
}

// var_dump($monster->getMonsters());




// Include the view
require_once '../views/view.php';
