<?php
require_once 'Circle.php';

$circle = new Circle(5, 10, 3);
echo $circle . "<br>"; 

// Зміна параметрів
$circle->setX(7);
$circle->setY(12);
$circle->setRadius(5);

echo "X: " . $circle->getX() . "<br>";
echo "Y: " . $circle->getY() . "<br>";
echo "Радіус: " . $circle->getRadius() . "<br>";

echo $circle;
