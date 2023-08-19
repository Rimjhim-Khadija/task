<?php

require_once './Class/Animal.php';

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Cat sound";
    }
}
