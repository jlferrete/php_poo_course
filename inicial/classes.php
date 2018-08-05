<?php
class Person
{
    public $age;
    public $name;
    public function run()
    {
        echo ' Estoy corriendo ';
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}

$person = new Person('Bernardo', 10);

echo $person -> name;

$person->run();

$person2 = new Person('Marco', 20);

echo "\n";
echo $person2->name;
$person2->run();
