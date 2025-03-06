<?php

echo __LINE__ ;  // Output: 3 (because this is the third line)
echo "<br>";

function myFunction() {
    echo __FUNCTION__;  // Output: myFunction (function name changes based on where it's called)
    echo "<br>";
}
myFunction();

class MyClass {
    public function myMethod() {
        echo __CLASS__;  // Output: MyClass (context is inside class)
        echo "<br>";
        echo __METHOD__; // Output: MyClass::myMethod
        echo "<br>";
    }
}

$obj = new MyClass();
$obj->myMethod();

?>