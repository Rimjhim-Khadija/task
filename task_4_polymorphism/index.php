<?php
require './Class/Cow.php';
require './Class/Dog.php';
require './Class/Cat.php';

$cow = new Cow();
$dog = new Dog();
$cat = new Cat();
$cow->makeSound();
echo "</br>";
$dog->makeSound();
echo "</br>";
$cat->makeSound();
