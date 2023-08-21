<?php

require('monster.php'); // Inclure le fichier Monsters.php

$monstersGenerator = new MonstersGenerator(); // Créer une instance de la classe

$monstresGeneres = $monstersGenerator->generateMonsters(1); // Appeler la méthode pour générer les monstres

print_r($monstresGeneres);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND THE TREASURE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center;">
    <img src="bandeau.jpg" alt="Logo">
</div>
<div class="container">
    <div class="header">
        <h1 style="padding-top: 20px; text-align: center;">Find the Treasure</h1>
    </div>
        <p>Plongez au cœur d'une aventure épique dans un monde mystérieux et dangereux. Une légende ancienne parle d'un trésor caché quelque part sur cette terre maudite. Mais ce n'est pas aussi simple que de suivre une carte au trésor. Vous devez affronter des créatures terrifiantes pour révéler les secrets de cet endroit.</p>
        <p>Armez-vous de courage et de compétences, car chaque coin obscur de la carte pourrait révéler un monstre assoiffé de sang. Votre détermination sera mise à l'épreuve. Chaque combat gagné vous rapprochera de la gloire, mais chaque erreur pourrait vous rapprocher de la défaite.</p>
        <p>Explorez des forêts ténébreuses, des montagnes effrayantes et des cavernes souterraines, tous abritant des défis mortels. À mesure que vous progresserez, vous découvrirez des alliés qui vous aideront dans votre quête et vous fourniront des armes puissantes.</p>
        <p>Le trésor légendaire attend celui ou celle qui aura le courage de se confronter aux horreurs de ce monde. Êtes-vous prêt à relever le défi, à conquérir vos peurs et à obtenir la récompense ultime ? Le destin du trésor et du monde repose entre vos mains.</p>
    </div>
    <div style="text-align: center;">
        <button>Commencer</button>
    </div>
    <div id="contenu">
    </div>
</body>
</html>