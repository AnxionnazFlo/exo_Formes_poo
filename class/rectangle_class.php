<?php



class Rectangle extends Forme
{

    //attributs de la class

    protected $largeur;
    protected $longueur;

    // constructeur

    public function __construct($lar, $long, Point2D $centre)
    {
        //on appel le contructeur de la Class parent (Forme) pour incrémenter le compteur et du coup l'affecter à l'id
        parent::__construct();
        $this->largeur = $lar;
        $this->longueur = $long;
        $this->centre = $centre;
    }

    public function surface()
    {
        return $this->largeur*$this->longueur;
    }

    public function perimetre()
    {
        return 2*($this->largeur+$this->longueur);
    }

    public function __toString()
    {
        return "{Rectangle : ".$this->id.
			"<br>Centre : ".$this->centre.
			"<br>Largeur : ".$this->largeur.
			"<br>Longueur : ".$this->longueur.
			"<br>Surface : " .$this->surface().
			"<br>Perimetre : ".$this->perimetre().
		"}<br><br>";
    }
}

