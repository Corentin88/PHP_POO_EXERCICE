<?php
abstract class Vehicule
{
    protected $couleur;
    protected $poids;
    
    public const SAUT_DE_LIGNE = "<br>";

    public function __construct($couleur, $poids)
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function rouler()
    {
        echo '<h2 class="h2">Le véhicule roule.</h2>' . self::SAUT_DE_LIGNE;
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

    public function repeindre($couleur)
    {
        $this->setCouleur($couleur);
        echo "Véhicule repeint en : " . $this->getCouleur() . self::SAUT_DE_LIGNE;
    }

    public static function afficher_attribut(Vehicule $vehicule)
    {
        echo "<strong>Attributs du véhicule :</strong>" . self::SAUT_DE_LIGNE;
        echo "Couleur : " . $vehicule->getCouleur() . self::SAUT_DE_LIGNE;
        echo "Poids : " . $vehicule->getPoids() . " kg" . self::SAUT_DE_LIGNE;

        
    }
}
?>
