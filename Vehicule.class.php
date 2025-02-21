<?php
abstract class Vehicule
{
    protected $couleur;
    protected $poids;
    protected static $nombre_changement_couleur = 0;

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
        if ($this->couleur !== $couleur) {
            $this->couleur = $couleur;
            self::$nombre_changement_couleur++;
            echo "Couleur changée en : " . $this->getCouleur() . self::SAUT_DE_LIGNE;
            echo "Nombre total de changements de couleur : " . self::$nombre_changement_couleur . self::SAUT_DE_LIGNE;
        }
    }

    public function getPoids()
    {
        return $this->poids;
    }

    public function setPoids($poids)
    {
        if ($poids > 2100) {
            echo "Poids trop élevé ! Le poids maximal est de 2100 kg." . self::SAUT_DE_LIGNE;
            $this->poids = 2100;
        } else {
            $this->poids = $poids;
        }
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
        if ($vehicule instanceof Voiture) {
            echo "Nombre de portes : " . $vehicule->getNombrePortes() . self::SAUT_DE_LIGNE;
            echo "Nombre de pneus neige : " . $vehicule->getNombrePneuNeige() . self::SAUT_DE_LIGNE;
            echo "Nombre de changements de couleur : " . self::$nombre_changement_couleur . self::SAUT_DE_LIGNE;
        }
    }
}
