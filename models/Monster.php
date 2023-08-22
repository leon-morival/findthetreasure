<?php
class Monster
{
    private $arraySize;
    private $monsterArray = [];

    public function __construct()
    {
        $this->arraySize = rand(0, 10);
        $this->retrieveMonsters();
    }

    private function generateMonsters()
    {
        while (count($this->monsterArray) < $this->arraySize) {
            $x = rand(0, 20);
            $y = rand(0, 20);
            $point = [$x, $y];

            if (!$this->isDuplicate($point)) {
                $this->monsterArray[] = $point;
            }
        }
    }

    private function isDuplicate($point)
    {
        foreach ($this->monsterArray as $existingPoint) {
            if ($existingPoint === $point) {
                return true;
            }
        }
        return false;
    }
    private function retrieveMonsters()
    {
        if (isset($_SESSION['monsterArray'])) {
            $this->monsterArray = $_SESSION['monsterArray'];
        } else {
            $this->generateMonsters();
            $_SESSION['monsterArray'] = $this->monsterArray;
        }
    }
    public function getMonsters()
    {
        return $this->monsterArray;
    }
}

// Usage
// You can change this to the desired array size


// Print the generated points