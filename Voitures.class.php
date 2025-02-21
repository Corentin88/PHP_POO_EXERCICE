<?php
require_once "QuatreRoues.class.php";

class Voiture extends Quatre_roues
{
    private $nombre_pneu_neige;
    public function __construct($couleur, $poids, $nombre_porte)
    {
        parent::__construct($couleur, $poids, $nombre_porte);
        $this->nombre_pneu_neige = 0;
    }

    public function ajouter_pneu_neige($nombre)
    {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre)
    {
        $this->nombre_pneu_neige = max(0, $this->nombre_pneu_neige - $nombre);
    }

    public function getNombrePneuNeige()
    {
        return $this->nombre_pneu_neige;
    }

    public function setNombrePneuNeige($nombre_pneu_neige)
    {
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }
    public function ajouter_personne($poids_personne)
    {
        $this->poids += $poids_personne;
        echo "<p>Ajout d'une personne de $poids_personne kg. Nouveau poids du véhicule : " . $this->getPoids() . " kg.</p><br>";

        if ($this->getPoids() >= 1500 && $this->nombre_pneu_neige <= 2) {
            echo "<p>Attention, veuillez mettre 4 pneus neige.</p><br>";
        }
    }
}
