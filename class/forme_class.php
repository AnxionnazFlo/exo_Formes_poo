<?php

abstract class Forme{

    private static $_compteur = 0;

//attributs protégés
    protected $id;
    protected $centre;

//constructeur qui incrémente le compteur et l'affecte à l'id
    public function __construct()
    {
        self::$_compteur++;
        $this->id = self::$_compteur;
    }

// Méthodes abstaites de la class
    abstract function surface();
    abstract function perimetre();

// Méthode bouger qui verifie que le centre est une instance de Point2D et qui utilise la methode bouger de la class Point2D

    public function bouger($dx,$dy){
        if ($this->centre instanceof Point2D){
            $this->centre->bouger($dx,$dy);
        }
    }
}