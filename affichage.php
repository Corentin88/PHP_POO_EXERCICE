<?php
require_once "Vehicule.class.php";
require_once "QuatreRoues.class.php";
require_once "Voitures.class.php";
require_once "DeuxRoues.class.php";
require_once "Camion.class.php";
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



<?php

$maMoto = new Deux_roues("rouge", 150,1000 );

echo "<h2 class='h2'>Affichage du Deux-Roues</h2>";
echo "<p>Couleur : " . $maMoto->getCouleur() . "</p>";
echo '<p class="poid">Poids : ' . $maMoto->getPoids() . ' kg</p>';
$maMoto->ajouter_personne(70);
echo '<p class="poid">Poids : ' . $maMoto->getPoids() . ' kg</p>';
$maMoto->repeindre("vert");
echo '<p> La cylindrée est de '.$maMoto->getCylindree(). ' cm3</p>';


echo "<h2>Affichage attributs du Deux-Roues</h2>";
Vehicule::afficher_attribut($maMoto);
?>



</body>

</html>