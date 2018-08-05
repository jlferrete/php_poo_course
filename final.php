<?php

trait myUtilities
{
    function sayMyName()
    {
        echo 'Mi nombre es ' . $this->name . "\n";
    }
}

abstract class Animal
{
    abstract public function makeSound();
    public function run()
    {
        echo "Corriendo\n";
    }
}

class Dog extends Animal
{
    use myUtilities;
    public $name = "Kanito";
    public function makeSound()
    {
        echo "Guau\n";
    }
}

class Cat extends Animal{
    use myUtilities;
    public $name = "Godofredo";
    public function makeSound()
    {
        echo "Miau\n";
    }
}

final class Schnauzer extends Dog{
    public function __construct()
    {
        $this->breed = 'schnauzer';
    }
}


$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
