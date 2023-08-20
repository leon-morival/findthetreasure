<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND THE TREAUSRE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
        document.addEventListener("keydown", function(event) {
            const directionKeyMapping = {
                ArrowUp: "en haut",
                ArrowDown: "en bas",
                ArrowLeft: "à gauche",
                ArrowRight: "à droite"
            };

            if (directionKeyMapping.hasOwnProperty(event.key)) {
                event.preventDefault(); // Prevent default scrolling behavior
                const direction = directionKeyMapping[event.key];
                document.querySelector(`button[name="direction"][value="${direction}"]`).click();
            }
        });
    </script>
</head>

<body>
    <div style="text-align: center;">
        <a href="http://localhost/findthetreasure/index.php"><img src="bandeau.jpg" alt="Logo"></a>
    </div>
    <div class="container">
        <div class="header">
            <h1 style="padding-top: 20px; text-align: center;">Find the Treasure</h1>
        </div>
        <h2>Attention, nouvel aventurier !</h2>
        <p>Le chemin qui s'ouvre devant toi est rempli de dangers et de mystères. Le trésor légendaire que tu cherches
            est dit être gardé par des créatures redoutables.</p>
        <p>Partez à l'aventure et commencez :</p>
        <ul>
            <li>Pour te déplacer sur la carte, utilise les touches du clavier (ou clique directement sur les boutons) ;
            </li>
            <li>Combats et triomphe des monstres pour gagner de l'expérience ;</li>
            <li>Trouve le trésor caché.</li>
        </ul>

        <form method="post" style="text-align: center;">
            <button class="btn btn-primary" type="submit" name="direction" value="en haut">Aller en haut</button>
            <button class="btn btn-primary" type="submit" name="direction" value="en bas">Aller en bas</button>
            <button class="btn btn-primary" type="submit" name="direction" value="à gauche">Aller à gauche</button>
            <button class="btn btn-primary" type="submit" name="direction" value="à droite">Aller à droite</button>
        </form>
        <br>
        <div id="movement">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $direction = $_POST["direction"];
                echo "Vous vous êtes déplacé $direction.";
            }
            ?>
        </div>
    </div>
    <div style="text-align: center; padding-top: 20px;">
        <img src="footer.jpg" alt="Logo">
    </div>
</body>

</html>