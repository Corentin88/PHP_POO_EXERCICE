<?php
require_once "Vehicule.class.php";


class Quatre_roues extends Vehicule
{
    private $nombre_porte;

    public function __construct($couleur, $poids, $nombre_porte)
    {
        parent::__construct($couleur, $poids);
        $this->nombre_porte = $nombre_porte;
    }


    public function getNombrePorte()
    {
        return $this->nombre_porte;
    }

    public function setNombrePorte($nombre_porte)
    {
        $this->nombre_porte = $nombre_porte;
    }
    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
        echo "Ajout d'une personne de $poids_personne kg. Nouveau poids du véhicule : " . $this->getPoids() . " kg.<br>";
    }
}
