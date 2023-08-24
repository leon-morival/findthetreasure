<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND THE TREASURE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="row mt-4">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <!-- <div style="text-align: center;" class="mt-3">
                <img src="./public/assets/bandeau.jpg" alt="Logo">
            </div> -->

            <div class="header">
                <h1 class="text-primary" style=" text-align: center;">Find the Treasure</h1>
                <hr class="border border-primary border-2 opacity-75">
            </div>
            <p>Plongez au cœur d'une aventure épique dans un monde mystérieux et dangereux. Une légende ancienne
                parle d'un
                trésor caché quelque part sur cette terre maudite. Mais ce n'est pas aussi simple que de suivre une
                carte au
                trésor. Vous devez affronter des créatures terrifiantes pour révéler les secrets de cet endroit.</p>
            <p>Armez-vous de courage et de compétences, car chaque coin obscur de la carte pourrait révéler un
                monstre
                assoiffé de sang. Votre détermination sera mise à l'épreuve. Chaque combat gagné vous rapprochera de
                la
                gloire, mais chaque erreur pourrait vous rapprocher de la défaite.</p>
            <p>Explorez des forêts ténébreuses, des montagnes effrayantes et des cavernes souterraines, tous
                abritant des
                défis mortels. À mesure que vous progresserez, vous découvrirez des alliés qui vous aideront dans
                votre
                quête et vous fourniront des armes puissantes.</p>
            <p>Le trésor légendaire attend celui ou celle qui aura le courage de se confronter aux horreurs de ce
                monde.
                Êtes-vous prêt à relever le défi, à conquérir vos peurs et à obtenir la récompense ultime ? Le
                destin du
                trésor et du monde repose entre vos mains.</p>
            <form action="controllers/controller.php" method="post" class="w-50 mx-auto">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Username</span>
                    </div>
                    <input type="text" class="form-control" name="username" id="usernameInput">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Commencer une partie</button>
            </form>
        </div>
        <div class="col-md-3 pl-5 pr-5">
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
                    require_once "./db/connect.php";
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

    <div id="contenu">
    </div>
    <!-- <div style="text-align: center; padding-top: 20px;">
        <img src="./public/assets/footer.jpg" alt="Logo">
        <img src="./public/assets/footer.jpg" alt="Logo"> -->
    <!-- </div>  -->
</body>

</html>