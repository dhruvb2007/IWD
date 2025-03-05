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
        echo "Dog is barking <br>";
    }
}

class BullDog extends Dog
{
    public function guard()
    {
        echo "Bulldog is Guarding <br>";
    }
}

$b = new BullDog();
$b->walk();
$b->bark();
$b->guard();    

?>