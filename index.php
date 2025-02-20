<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_POO_EXERCICE</title>
</head>

<?php
class Vehicule {
    private $couleur;
    private $poids;

    public function rouler() {
        echo "Le véhicule roule.\n";
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }
}

class Quatre_roues extends Vehicule {
    private $nombre_porte;

    public function repeindre($couleur) {
        $this->couleur = $couleur;
    }
}

class Voiture extends Quatre_roues {
    private $nombre_pneu_neige;

    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige -= max(0, $nombre);
    }
}

class Deux_roues extends Vehicule {
    private $cylindree;

    public function mettre_essence($nombre_litre) {
        echo "Ajout de $nombre_litre litres d'essence.\n";
    }
}

class Camion extends Quatre_roues {
    private $longueur;

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur += $longueur_remorque;
    }
}
?>
