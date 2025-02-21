<?php
require_once "Vehicule.class.php";

require_once "Voitures.class.php";

require_once "QuatreRoues.class.php";
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

    $maMoto = new Deux_roues("rouge", 150, 1000);

    echo "<h2 class='h2'>Affichage du Deux-Roues</h2>";
    echo "<p>Couleur : " . $maMoto->getCouleur() . "</p>";
    echo '<p class="poid">Poids : ' . $maMoto->getPoids() . ' kg</p>';
    $maMoto->ajouter_personne(70);
    echo '<p class="poid">Poids : ' . $maMoto->getPoids() . ' kg</p>';
    $maMoto->repeindre("vert");
    echo '<p> La cylindrée est de ' . $maMoto->getCylindree() . ' cm3</p>';


    echo "<h2>Affichage attributs du Deux-Roues</h2>";
    Vehicule::afficher_attribut($maMoto);


    echo "<h2 class='h2'>Affichage du Camion</h2>";
    // Création du camion blanc de 6000 kg
    $monCamion = new Camion("blanc", 6000, 2, "");
    echo "<p>Le camion est " . $monCamion->getCouleur() . " et il pèse " . $monCamion->getPoids() . " kg et il dispose de " . $monCamion->getNombrePortes() . " portes.</p>";

    // Ajouter une personne de 84 kg
    $monCamion->ajouter_personne(84);

    // Repeindre en bleu
    $monCamion->repeindre("bleu");
    echo "<p>Le camion est maintenant " . $monCamion->getCouleur() . " et il pèse " . $monCamion->getPoids() . " kg et il dispose de " . $monCamion->getNombrePortes() . " portes.</p>";
    // Affichage des attributs
    echo "<h2>Affichage attributs du Camion</h2>";
    Vehicule::afficher_attribut($monCamion);


    $maVoiture = new Voiture("verte", 2100, 4);
    Vehicule::afficher_attribut($maVoiture);
    $maVoiture->ajouter_personne(80);
    $maVoiture->ajouter_pneu_neige(2);
    Vehicule::afficher_attribut($maVoiture);
    $maVoiture->enlever_pneu_neige(4);
    $maVoiture->setCouleur("Bleue");
    $maVoiture->repeindre("Noire");
    Vehicule::afficher_attribut($maVoiture); 
    ?>
    <h2 class="h2">Partie 6</h2>
   <?php
$monCamion = new Camion("Bleu", 10000,2,10);
echo "<p>Le camion est " . $monCamion->getCouleur() . " et il pèse " . $monCamion->getPoids() . " kg et il dispose de " . $monCamion->getNombrePortes() . " portes.Et mesure ". $monCamion->getLongueur()." mètres.</p>";

   ?>


</body>

</html>