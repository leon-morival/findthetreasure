<?php require_once 'controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monster Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">

        <h1>Monster Game</h1>

        <p>Player Position: (<?php echo $player->getPositionX(); ?>, <?php echo $player->getPositionY(); ?>)</p>

        <p>Chest Position: (<?php echo $chest->getPositionX(); ?>, <?php echo $chest->getPositionY(); ?>)</p>

        <p>Move the player:</p>
        <div class="row w-25 justify-center">
            <div class="col"></div>
            <div class="col"> <a class=" " href="controller.php?direction=0">Up</a></div>
            <div class="col"></div>
            <div class="w-100"></div>
            <div class="col"> <a href="controller.php?direction=3">Left</a></div>
            <div class="col"></div>
            <div class="col"> <a class="btn btn-danger" href="controller.php?direction=1">Right</a></div>
            <div class="w-100"></div>
            <div class="col"></div>
            <div class="col"> <a href="controller.php?direction=2">Down</a></div>
            <div class="col"></div>
        </div>




    </div>
</body>

</html>