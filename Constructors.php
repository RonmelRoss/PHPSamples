<?php
//Demonstrate usage of constructors

class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$animal = new Animal("Bob the Dog");
echo $animal->name;
?>