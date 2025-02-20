<?php
abstract class Vehicule
{
    protected $couleur;
    protected $poids;
    public function __construct($couleur, $poids)
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }
    public function rouler()
    {
        echo '<h2 class="h2">Le véhicule roule.</h2><br>';
    }
    abstract public function ajouter_personne($poids_personne);

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
    public static function afficher_attribut(Vehicule $vehicule)
    {
        echo "<p>Couleur : " . $vehicule->getCouleur() . "<br>";
        echo "Poids : " . $vehicule->getPoids() . " kg</p>";
    }
}
