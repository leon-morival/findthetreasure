<?php
require_once "Player.php";

class Fight
{
    public function __construct()
    {
    }

    public function startFight($player, $monster)
    {
        $fightResults = array();

        // Store monster's attributes in $fightResults
        $fightResults['monster'] = array(
            'pv' => $monster['PV'],
            'force' => $monster['Force']
        );

        // Player attacks first
        // Monster loses HP equal to player's power

        // Check if monster is defeated
        if ($fightResults['monster']['pv'] <= 0) {
            echo 'Vous avez gagné !';
            // Remove the monster from the monsters array
            $monsters = $_SESSION['monsterArray'];
            $indexToRemove = array_search($monster, $monsters);
            if ($indexToRemove !== false) {
                unset($monsters[$indexToRemove]);
            }
            $_SESSION['monsterArray'] = $monsters;
        } else {
            // Monster attacks if it's not defeated
            $player->setPV($player->getPV() - $fightResults['monster']['force']); // Player loses HP equal to monster's force
        }
        while ($fightResults['monster']['pv'] <= 0 || $player->getPV() <= 0) {
            $fightResults['monster']['pv'] -= $player->getPower();
        }

        return $fightResults;
    }
}
