<?php
// ASCII -> character
echo chr(65); // A

// character first latter -> ASCII
echo ord("And"); // 65

// Case Function
echo strtolower("HELLO"); // hello

echo strtoupper("hello"); // HELLO

echo strlen("Hello World"); //11

// ------------------------------------

//Trim FUnctions
echo ltrim("   Hello"," "); // Hello

echo rtrim("Hello  "," "); // Hello

echo trim("--Hello--","-"); // Hello

// ------------------------------------

echo substr("Hello world",3,2); // lo

echo strcmp("hello","hello"); // 0

echo strcasecmp("hello","hello"); // 0

echo strpos("Hello","e"); // 1

// last occurance in string
echo strrpos("Hello","l"); // 3

//fist occurance in string
echo stripos("Hello world","w");

// which word want to replace, what replace, string
echo str_replace("world","Dhruv","Hello world!"); // Hello Dhruv!

echo strrev("hello"); // olleh

// return array divide in given number
print_r(str_split("Hello",3));  //Array ( [0] => Hel [1] => lo )

echo str_word_count("Hello world!"); // 2

$a = array('Hello,','How','are','you?');
echo join(" ",$a); // Hello, How are you?

echo str_shuffle("Hello World"); // rlH lodWole

?>