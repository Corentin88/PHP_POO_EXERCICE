<?php
require_once "Vehicule.class.php";
require_once "QuatreRoues.class.php";
require_once "Voitures.class.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Véhicule</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>





    <h2>Partie 2 :</h2>
    <div class="partie">
        <?php



        $monVehicule = new Vehicule("noir", 1500);

        $monVehicule->rouler();


        echo '<p class="poid"> Le poids de mon véhicule est de : ' . $monVehicule->getPoids() . ' kg.</p><br>';



        $monVehicule->ajouter_personne(70);

        echo '<p class="newPoid"> Nouveau poids du véhicule après ajout d\'une personne : ' . $monVehicule->getPoids() . ' kg.</p><br>';



        ?>
    </div><br>

    <h2>Partie 3 :</h2>
    <div class="partie">
        <?php

        $monVehicule = new Vehicule("verte", 1400);

        echo '<p class="poid"> Le poids de mon véhicule est de : ' . $monVehicule->getPoids() . ' kg et sa couleur est ' . $monVehicule->getcouleur() . '</p><br>';

        $monVehicule->ajouter_personne(65);

        echo '<p class="newPoid"> Nouveau poids du véhicule après ajout d\'une personne : ' . $monVehicule->getPoids() . ' kg.</p><br>';

        ?>


        <h2>Partie 3-2</h2>
        <?php
        $maVoiture = new Voiture("verte", 1400, 4);

        echo '<p class="poid"> Le poids de la voiture est de : ' . $maVoiture->getPoids() . ' kg.</p><br>';

        $maVoiture->ajouter_personne(65 * 2);

        echo '<p class="newPoid"> Nouveau poids de la voiture après ajout de deux personnes : ' . $maVoiture->getPoids() . ' kg.</p><br>';
        // Repeindre la voiture en rouge
        $maVoiture->repeindre("rouge");
        $maVoiture->ajouter_pneu_neige(2);

        echo '<p class="couleur"> Nouvelle couleur de la voiture est ' . $maVoiture->getCouleur() . ' et il y a ' . $maVoiture->getNombrePneuNeige() .' pneus neige </p><br>';
  ?>
    </div>

</body>
              var_dump($maVoiture)

</html>