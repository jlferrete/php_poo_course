<?php

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
    public function makeSound()
    {
        echo "Guau\n";
    }
}

class Cat extends Animal{
    public function makeSound()
    {
        echo "Miau\n";
    }
}

interface iDB
{
    public function connect();
}

class MySQL implements iDB
{
    public function connect()
    {
        echo "Conectando con MySQL\n";
    }
}
class Oracle implements iDB
{
    public function connect()
    {
        echo "Conectando con Oracle\n";
    }
} 

$instDog = new Dog;
$instCat = new Cat;
$instDog->makeSound();
$instDog->run();
$instCat->makeSound();
$instCat->run();

$instMySQL = new MySQL;
$instOracle = new Oracle;

$instMySQL->connect();
$instOracle->connect();