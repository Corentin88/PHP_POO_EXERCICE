<?php
require_once "QuatreRoues.class.php";


class Camion extends Quatre_roues
{
    private $longueur;
    public function __construct($couleur, $poids, $nombre_porte, $longueur)
    {
        parent::__construct($couleur, $poids);
        $this->setNombrePorte($nombre_porte);
        $this->longueur = $longueur;
    }

    public function ajouter_remorque($longueur_remorque)
    {
        $this->longueur += $longueur_remorque;
    }

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }
}
