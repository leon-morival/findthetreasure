<?php
session_start();
require_once '../models/Player.php';
require_once '../models/Monster.php';
require_once '../models/Fight.php';
$monster = new Monster();
$player = new Player();
$chest = new Chest();
$fight = new Fight();
echo '<pre>les monstres sur la map :';
var_dump($monster->getMonsters());
echo '</pre>';
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
