<?php

interface Flyer
{
    public function fly();
} 

interface Swimmer
{
    public function swim();
}

class Duck implements Flyer, Swimmer
{
    public function fly()
    {
        echo "Duck can fly <br>";
    }
    public function swim()
    {
        echo "Duck can swim <br>";
    }
}

$d = new Duck();
$d->fly();
$d->swim();

?>