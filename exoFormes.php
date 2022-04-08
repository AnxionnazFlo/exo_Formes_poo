<?php

include('class/point2D_class.php');
include('class/forme_class.php');
include('class/rectangle_class.php');
include('class/cercle_class.php');
include('class/carre_class.php');


$test = new Point2D(2,4);
$rectangeTest = new Rectangle(3,4,$test);
echo $rectangeTest;
$test->bouger(4,8);
echo $rectangeTest;
$cercleTest = new Cercle(4,$test);
echo $cercleTest;
$carreTest = new Carre(2,2,$test);
echo $carreTest;