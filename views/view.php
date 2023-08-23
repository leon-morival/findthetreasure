<?php require_once '../controllers/controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monster Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add your CSS styles here */
        .game-board {
            display: grid;
            grid-template-columns: repeat(20, 30px);
            grid-template-rows: repeat(20, 30px);
            gap: 1px;
        }

        .cell {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .player {
            background-color: green;
            color: white;
        }

        .monster {
            background-color: red;
            color: white;
        }

        .chest {
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>

    <div style="text-align: center;">
        <a href="../index.php"><img src="../public/assets/bandeau.jpg" alt="Logo"></a>
    </div>
    <div class="container text-center">
        <div class="header">
            <h1 class="text-primary" style="padding-top: 20px; text-align: center;">Find the Treasure</h1>
        </div>
        <hr class="border border-primary border-3 opacity-75">

        <div class="row">
            <!-- Game board -->
            <div class="col-md-9">
                <div class="game-board">
                    <?php
                    // Assuming $player, $monster, and $chest are already initialized

                    // Create a 20x20 game board
                    $boardSize = 21;
                    for ($row = 1; $row < $boardSize; $row++) {
                        for ($col = 1; $col < $boardSize; $col++) {
                            echo '<div class="cell';

                            // Check if the current position contains the player, monster, or chest
                            if ($player->getPositionX() === $col && $player->getPositionY() === $row) {
                                echo ' player">P';
                            } elseif ($chest->getPositionX() === $col && $chest->getPositionY() === $row) {
                                echo ' chest">C';
                            } elseif (in_array([$col, $row], $monster->getMonsters(), true)) {
                                echo ' monster">M';
                            } else {
                                echo '">';
                            }

                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Player movement buttons -->
            <div class="col-md-3" style="right:90px;">
                <p>Position du joueur : (<?php echo $player->getPositionX(); ?>, <?php echo $player->getPositionY(); ?>)
                </p>

                <p>Position du coffre : (<?php echo $chest->getPositionX(); ?>, <?php echo $chest->getPositionY(); ?>)
                </p>

                <p>Déplacez-vous</p>
                <div class="w-100 mx-auto text-center">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a href="../controllers/controller.php?direction=0"><i class="fa-solid fa-arrow-up fa-3x"></i></a>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="../controllers/controller.php?direction=3"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a href="../controllers/controller.php?direction=1"><i class="fa-solid fa-arrow-right fa-3x"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a href="../controllers/controller.php?direction=2"><i class="fa-solid fa-arrow-down fa-3x"></i></a>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>

                <!-- Reset button -->
                <div class="w-100 mx-auto text-center mt-3">
                    <a class="btn btn-danger" href="../controllers/controller.php?reset=true">Reset Game</a>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; padding-top: 20px;">
        <img src="../public/assets/footer.jpg" alt="Logo">
    </div>
</body>

</html>