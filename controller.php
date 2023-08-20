<?php
session_start();
require_once 'classes/Player.php';


$player = new Player();
$chest = new Chest();
// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);
}

// Include the view
require_once 'view.php';
