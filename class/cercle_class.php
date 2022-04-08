<?php



class Cercle extends Forme
{

    //attributs de la class

    private $_rayon;

    // constructeur

    public function __construct($rayon, Point2D $centre)
    {
        //on appel le contructeur de la Class parent (Forme) pour incrémenter le compteur et du coup l'affecter à l'id
        parent::__construct();
        $this->_rayon = $rayon;
        $this->centre = $centre;
    }

    public function surface()
    {
        return round(M_PI*(pow($this->_rayon,2)),2);
    }

    public function perimetre()
    {
        return round(2*$this->_rayon*M_PI,2);
    }

    public function __toString()
    {
        return "{Cercle : ".$this->id.
			"<br>Centre : ".$this->centre.
			"<br>Rayon : ".$this->_rayon.
			"<br>Surface : " .$this->surface().
			"<br>Perimetre : ".$this->perimetre().
		"}<br><br>";
    }
}

