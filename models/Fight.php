<?php

class Fight
{
    public function __construct()
    {

    }

    public function startFight($player, $monster)
    {
        $fightResults = array();

        // Ajoutez les valeurs du joueur et du monstre dans le tableau $fightResults
        $fightResults['player'] = array(
            'pv' => $player->getPV(),
            'force' => $player->getPower(),
            'xp' => $player->getXp(),
        );

        $fightResults['monster'] = array(
            'pv' => $monster['PV'],
            'force' => $monster['Force']
        );

        if ($fightResults['player']['force'] > $fightResults['monster']['pv']) {
            echo 'Vous avez gagné !';
            // Retirez le monstre du tableau de monstres
            $monsters = $_SESSION['monsterArray'];
            $indexToRemove = array_search($monster, $monsters);
            if ($indexToRemove !== false) {
                unset($monsters[$indexToRemove]);
            }
            $_SESSION['monsterArray'] = $monsters;
            $fightResults['player']['xp'] += $fightResults['monster']['pv'];



            echo $fightResults['player']['xp'];
        }
        return $fightResults;

    }


}
