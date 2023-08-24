<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lose</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

    <div class="container">

        <h1 class="text-center m-5"><?= $player->getUser() ?> à perdu avec : <?php echo $player->getXp() ?> XP</h1>
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
</body>

</html>