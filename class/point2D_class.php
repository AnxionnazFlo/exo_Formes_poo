<?php

class Point2D{

    private $_x;
    private $_y;

    public function __construct($x,$y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function setX($x){
        $this->_x = $x;
    }

    public function setY($y){
        $this->_y = $y;
    }

    public function getX($x){
        return $this->_x;
    }

    public function getY($y){
        return $this->_y;
    }

    public function __toString()
    {
        return "Point ( x = ".$this->_x . " ,y = ". $this->_y. " )";
    }

    public function bouger($dx,$dy){
        $this->_x += $dx;
        $this->_y += $dy;
    }

}
