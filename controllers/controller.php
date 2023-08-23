<?php
session_start();
require_once '../models/Player.php';
require_once '../models/Monster.php';
$monster = new Monster();
$player = new Player();
$chest = new Chest();
$monster->getMonsters();
var_dump($monster->getMonsters());
// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);



    // Imprimez le tableau de monstres pour vérifier


}
if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
    // Reset the game by generating new values and clearing the session data
    $player = new Player();
    $monster = new Monster();
    $chest = new Chest();

    session_unset(); // Clear all session variables
    session_destroy(); // Destroy the session
    session_start(); // Start a new session

}





// Include the view
require_once '../views/view.php';
