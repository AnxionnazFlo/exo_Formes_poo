<?php

final class Carre extends Rectangle{
    public function __toString()
    {
        return "{Carré : ".$this->id.
			"<br>Centre : ".$this->centre.
			"<br>Longueur : ".$this->longueur.
			"<br>Surface : " .$this->surface().
			"<br>Perimetre : ".$this->perimetre().
		"}<br><br>";
    }
}