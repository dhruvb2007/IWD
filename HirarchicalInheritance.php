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
        echo "Dog is Barking <br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo "Cat is Meowing <br>";
    }
}

$d = new Dog();
$d->walk();
$d->bark();
$c = new cat();
$c->walk();
$c->meow(); 

?>