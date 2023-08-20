<?php
require_once 'classes/Player.php';

// require_once 'classes/Chest.php';

$player = new Player();
$monsters = new Monster();
$monsterArray = $monsters->generateMonsters(); // Generate an array of monsters
$chest = new Chest();

// Process user input to move the player
if (isset($_GET['direction'])) {
    $direction = (int)$_GET['direction'];
    $player->move($direction);
}

// Include the view
require_once 'view.php';
