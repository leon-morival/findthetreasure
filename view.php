<?php require_once 'controller.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Monster Game</title>
</head>

<body>
    <h1>Monster Game</h1>

    <p>Player Position: (<?php echo $player->getPositionX(); ?>, <?php echo $player->getPositionY(); ?>)</p>

    <p>Chest Position: (<?php echo $chest->getPositionX(); ?>, <?php echo $chest->getPositionY(); ?>)</p>

    <p>Move the player:</p>
    <!-- <a href="controller.php?direction=0">Up</a>
    <a href="controller.php?direction=1">Right</a>
    <a href="controller.php?direction=2">Down</a>
    <a href="controller.php?direction=3">Left</a> -->
    <form action="controller.php" method="post">
        <button type="submit">up</button>
    </form>
</body>

</html>