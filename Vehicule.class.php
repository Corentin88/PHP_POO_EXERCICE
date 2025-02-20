<?php
class Vehicule
{
    private $couleur;
    private $poids;
    public function __construct($couleur, $poids )
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }
    public function rouler()
    {
        echo '<h2 class="h2">Le véhicule roule.</h2><br>';
    }

    public function ajouter_personne($poids_personne)
    {
        $this->poids += $poids_personne;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getPoids()
    {
        return $this->poids;
    }

    public function setPoids($poids)
    {
        $this->poids = $poids;
    }
}
?>