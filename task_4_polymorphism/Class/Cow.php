<?php
require_once './Class/Animal.php';

class Cow extends Animal
{
    public function makeSound()
    {
        echo "Cow sound";
    }
}
