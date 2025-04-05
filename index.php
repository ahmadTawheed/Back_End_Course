<?php 

    $name = "Ahmed Tawheed";
    $age = 20;
    $isStudent = true;

    echo "Hello, my name is $name.<br>
     I am $age years old. <br>
     Am I a student? " . ($isStudent ? 'Yes' : 'No') . "<br>";

     // HTML
     $name1 = "Ali";
     $age1 = 22;
     $isStudent1 = false;

/* 
1- echo and print
2- How do you write variables correct in PHP?
3- php loosely typed language
4- php is a server side language
5- you can use html in php file
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p style="background-color: lightcoral;padding: 10px; border-radius: 10px;width: auto">
        <?php
            echo "Hello, my name is $name1.<br>
            I am $age1 years old. <br>
            Am I a student? " . ($isStudent1 ? 'Yes' : 'No') . "<br>";
        ?> 
    </p>
</body>
</html>
