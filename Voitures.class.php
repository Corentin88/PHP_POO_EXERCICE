<?php
require_once "QuatreRoues.class.php";

class Voiture extends Quatre_roues {
    private $nombre_pneu_neige;

    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige = max(0, $this->nombre_pneu_neige - $nombre);
    }

    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige;
    }

    public function setNombrePneuNeige($nombre_pneu_neige) {
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }
}
?>