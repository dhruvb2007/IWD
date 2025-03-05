<?php
class Animal
{
    public function walk()
    {
        echo "Animal can walk <br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "Dog is barking";
    }
}

$d = new Dog();
$d->walk();
$d->bark();
?>