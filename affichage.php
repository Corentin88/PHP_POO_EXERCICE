<?php require_once "Vehicule.class.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Véhicule</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>





    <h2>Partie 2</h2>
    <div class="partie">
        <?php



        $monVehicule = new Vehicule("noir", 1500);

        $monVehicule->rouler();


        echo '<p class="poid"> Le poids de mon véhicule est de : ' . $monVehicule->getPoids() . ' kg.</p><br>';



        $monVehicule->ajouter_personne(70);

        echo '<p class="newPoid"> Nouveau poids du véhicule après ajout d\'une personne : ' . $monVehicule->getPoids() . ' kg.</p><br>';



        ?>
    </div><br>

    <h2>Partie 3</h2>
    <div class="partie">
        <?php

        $monVehicule = new Vehicule("verte", 1400);

        echo '<p class="poid"> Le poids de mon véhicule est de : ' . $monVehicule->getPoids() . ' kg.</p><br>';

        $monVehicule->ajouter_personne(65);

        echo '<p class="newPoid"> Nouveau poids du véhicule après ajout d\'une personne : ' . $monVehicule->getPoids() . ' kg.</p><br>';

        ?>

    </div>

</body>

</html>