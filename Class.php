<?php
class Vehicule {
    private $couleur;
    private $poids;
private function __construct($couleur = '' , $poids = '')
{
    $this->couleur = $couleur;
    $this->poids = $poids;
}
    public function rouler() {
        echo "Le véhicule roule.\n";
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }

    // Getters et Setters
    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }
}

class Quatre_roues extends Vehicule {
    private $nombre_porte;

    public function repeindre($couleur) {
        $this->setCouleur($couleur);
    }

    // Getters et Setters
    public function getNombrePorte() {
        return $this->nombre_porte;
    }

    public function setNombrePorte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }
}

class Voiture extends Quatre_roues {
    private $nombre_pneu_neige;

    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige = max(0, $this->nombre_pneu_neige - $nombre);
    }

    // Getters et Setters
    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige;
    }

    public function setNombrePneuNeige($nombre_pneu_neige) {
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }
}

class Deux_roues extends Vehicule {
    private $cylindree;

    public function mettre_essence($nombre_litre) {
        echo "Ajout de $nombre_litre litres d'essence.\n";
    }

    // Getters et Setters
    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
}

class Camion extends Quatre_roues {
    private $longueur;

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur += $longueur_remorque;
    }

    // Getters et Setters
    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }
}
?>
