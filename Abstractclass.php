<?php
abstract class Ability
{
    public function fly()
    {
        echo "Duck can Fly <br>";
    }
    abstract public function swim();
}

class Duck extends Ability
{
    public function swim()
    {
        echo "Duck can swim <br>";
    }
}

class Fish extends Ability
{
    public function swim()
    {
        echo "Fish can swim <br>";
    }
}

$d = new Duck();
$d->swim();
$d->fly();
$f = new Fish();
$f->swim();
?>