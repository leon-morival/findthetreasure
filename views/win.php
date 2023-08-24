<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lose</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    require_once "../models/Player.php"; // Include the Player class

    session_start(); // Start the session

    // Check if the player object is stored in the session
    if (isset($_SESSION['user'])) {
        $player = new Player($_SESSION['user']); // Create a new Player object using the user from session
    } else {
        echo "not working";
    }
    ?>

    <div class="">

        <h1 class="text-center m-5"><?php echo $player->getUser();
                                    if ($player->getWin() == true) echo " à gagné avec";
                                    else echo " à perdu" ?>
            <?php if ($player->getWin()) echo $player->getXp() . " XP" ?>

        </h1>
        <div class="row">


            <div class="col-md-8">
                <form action="/findthetreaser/controllers/controller.php" method="post" class="w-50 mx-auto">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Username</span>
                        </div>
                        <input type="text" class="form-control " name="username" id="usernameInput">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mx-auto ">Commencer une
                        partie</button>
                </form>
            </div>
            <div class="col-md-4">

                <table class="table border">
                    <thead class="thead-dark">
                        <tr>
                            <th>Classement</th>
                            <th>Username</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "../db/connect.php";
                        // Assuming you have established the $conn variable for database connection

                        // Modify the SQL query to sort by score in descending order
                        $results = mysqli_query($conn, "SELECT * FROM score ORDER BY score DESC LIMIT 10 ");

                        $position = 0; // Initialize position outside the loop
                        while ($row = mysqli_fetch_array($results)) {
                            $position += 1; // Increment position

                        ?>
                        <tr>
                            <td><?php echo $position; ?></td>
                            <td>
                                <?php

                                    // If the user is the first in the table, display a crown icon
                                    if ($position === 1) {
                                        echo '<i class="fas fa-crown text-warning ml-1"></i> ';
                                    }
                                    echo $row['username'];
                                    ?>
                            </td>
                            <td><?php echo $row['score'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>