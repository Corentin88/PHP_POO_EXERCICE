<?php
require_once "Vehicule.class.php";


class Quatre_roues extends Vehicule {
    private $nombre_porte;

  

    public function getNombrePorte() {
        return $this->nombre_porte;
    }

    public function setNombrePorte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }
}
?>