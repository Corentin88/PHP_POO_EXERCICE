<?php
require_once "QuatreRoues.class.php";
require_once "action.php";

class Camion extends Quatre_roues implements Action
{
    private $longueur;
    public function __construct($couleur, $poids, $nombre_porte, $longueur)
    {
        parent::__construct($couleur, $poids, $nombre_porte);
        $this->longueur = $longueur;
    }

    public function ajouter_remorque($longueur_remorque)
    {
        $this->longueur += $longueur_remorque;
    }
    public function mettre_essence(int $nombre_litre): void
    {
        $poids_total = $this->getPoids() + $nombre_litre;
        $this->setPoids($poids_total);  // Mise à jour du poids sans limite
        echo "Ajout de $nombre_litre litres d'essence. Nouveau poids du camion : " . $this->getPoids() . " kg.<br>";    }
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }
}
