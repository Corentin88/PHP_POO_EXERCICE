<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Véhicule</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>






<?php
require_once "Vehicule.class.php";



$monVehicule = new Vehicule("noir", 1500);

$monVehicule->rouler();


echo '<p class="poid"> Le poids d emon véhicule est de : '.$monVehicule->getPoids(). ' kg.</p><br>';



$monVehicule->ajouter_personne(70);

echo '<p class="newPoid"> Nouveau poids du véhicule après ajout d\'une personne : ' . $monVehicule->getPoids() . ' kg.</p><br>';



?>


</body>
</html>




