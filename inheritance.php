<?php

class Animal
{
    public $sound_type = 'hago un sonido';

    public function run()
    {
        echo 'Yo corro';
    }

    public function walk()
    {
        echo 'Yo camino';
    }

    public function __construct()
    {
        echo 'Ha nacido un animal';
    }

    public function getSound()
    {
        echo ' Yo '.$this->sound_type;
    }

}

class Dog extends Animal
{
    public $sound_type = 'ladro';
    public function __construct()
    {
        parent::__construct();
        echo 'Ha nacido un perro';
    }
    
}

class Cat extends Animal
{
    public $sound_type = 'maullo';
    public function __construct()
    {
        parent::__construct();
        echo 'Ha nacido un gato';
    }
}

$dog= new Dog();
$dog->run();
$dog->getSound();
echo "\n";
$cat = new Cat();
$cat->run();
$cat->getSound();

if( $dog instanceof Dog )
{
    echo 'Es un perro';
}

if( $dog instanceof Animal )
{
    echo 'Es un animal';
}