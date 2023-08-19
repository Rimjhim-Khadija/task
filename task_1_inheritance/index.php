<?php

require 'Class/Shape.php';
require 'Class/Circle.php';
require 'Class/Rectangle.php';



$circle = new Circle(10);
echo "Circle Area: " . $circle->calculateArea();
echo "</br>";
$rectangle = new Rectangle(2, 3);
echo "Rectangle Area: " . $rectangle->calculateArea();
