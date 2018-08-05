<?php
class Person
{
    public $age;
    public $name;
    public function run()
    {
        echo ' Estoy corriendo ';
    }

    public function walk()
    {
        echo 'Estoy caminando ';
    }

    public function greet( $other_person_name )
    {
        echo $this->name. ' saluda a ' . $other_person_name;
    }

    public function __construct()
    {
        echo "Estoy siendo creado ".rand(1,99)."\n";
    }
}

for ($i=0; $i<5; $i++ )
{
    //$person = new Person();
}

$person = new Person();
$person -> run();
$person -> walk();
$person -> greet('Marco');