<?php
class Animal
{
    public function __construct()
    {
        echo "Animal Start Walking"."<br>";
    }
    public function __destruct()        
    {
        echo "Animal Stop Walking";
    }
}

$a = new Animal();

?>