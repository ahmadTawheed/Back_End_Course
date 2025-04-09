<?php 
// Session 2
/*
    1- Data types in PHP
    2- String, Integer, Float, Boolean, Array, Object, Null
    3- Arthmetic operators => +, -, *, /, %, **
    4- Decrement and Increment operators => ++, --
    5- Comparison operators => ==, ===, !=, !==, >, <, >=, <=
    6- Space ship operator => <=> (PHP 7)
    7- Logical operators => &&, ||, !, !, xor
    8- Assignment operators => =, +=, -=, *=, /=, %=, .=
    // Q1: Write a program to perform sum or addition of two numbers in PHP programming. You PHP Variables and Operators.
    // Q2: You have this variable $a = 4; display this sentence "I have 5 books" using Pre-Increment at once. Post-Increment once again.
    // Q3: You have these variables $sentence = null; $first = "In"; $second = "PHP"; $third = "Course Using concatenating assignment operator (.) Display this sentence "In PHP Course".

*/
// Task => 1
$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum <br>";
// Task => 2
$a = 4;
echo "I have " . ++$a . " books <br>"; // Pre-Increment
$b = 4;
echo "I have " . $b++ . " books <br>"; // Post-Increment
echo "I have " . $b . " books <br>";   // After Post-Increment
// Task => 3
$sentence = null;
$first = "In";
$second = "PHP";
$third = "Course";
$sentence = $first . " " . $second . " " . $third;
echo $sentence . "<br>"; // Output=> In PHP Course


$user = "Ahmed";
$dataBase= true;

if (!$dataBase) {
    echo "Welcome to Website $user <br>";
} else {
    echo "Sorry  $user Not found please signUp<br>";
}

echo "Thank you";

?>