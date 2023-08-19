<?php


require_once './Class/Animal.php';

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Dog sound";
    }
}
