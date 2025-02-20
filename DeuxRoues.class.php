<?php
require_once "Vehicule.class.php";

class Deux_roues extends Vehicule {
    private $cylindree;



    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
}
?>