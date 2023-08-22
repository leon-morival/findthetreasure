<?php require_once '../controllers/controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monster Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container text-center">

        <h1>Monster Game</h1>

        <p>Player Position: (<?php echo $player->getPositionX(); ?>, <?php echo $player->getPositionY(); ?>)</p>

        <p>Chest Position: (<?php echo $chest->getPositionX(); ?>, <?php echo $chest->getPositionY(); ?>)</p>

        <p>Move the player:</p>
        <div class="w-25 mx-auto text-center">
            <div class="row">

                <div class="col-4">

                </div>
                <div class="col-4">
                    <a class=" " href="../controllers/controller.php?direction=0"><i
                            class="fa-solid fa-arrow-up fa-3x"></i></a>
                </div>
                <div class="col-4">

                </div>
            </div>
            <div class="row">

                <div class="col-4">
                    <a href="../controllers/controller.php?direction=3"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                    <a href="../controllers/controller.php?direction=1"><i
                            class="fa-solid fa-arrow-right fa-3x"></i></a>
                </div>
            </div>
            <div class="row">

                <div class="col-4">

                </div>
                <div class="col-4">
                    <a href="../controllers/controller.php?direction=2"><i class="fa-solid fa-arrow-down fa-3x"></i></a>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>


        <!-- Add this button below your existing player movement buttons -->
        <div class="row mt-3">
            <div class="col">
                <a class="btn btn-danger" href="../controllers/controller.php?reset=true">Reset Game</a>
            </div>
        </div>


    </div>

</body>

</html>