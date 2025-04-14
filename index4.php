<?php

     // Session 3
     /*
        1- conditional statements in PHP
        2- if, else, elseif, switch, ternary operator
        3- loops in PHP
        4- for, while, do while, foreach
        5- break and continue statements
        6- superglobals arrays in PHP
        7- $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_FILES, $_SERVER, $_ENV

        const task = () => {
            Use an associative array to store employee details such as name, age, insurance status, and salary.
        } 
            
     */

     $employees = [

            [
                'name' => 'Ahmed',
                'age' => 30,
                'insurance' => 'Yes',
                'salary' => 5000,
            ],
            [
                'name' => 'Sara',
                'age' => 28,
                'insurance' => 'No',
                'salary' => 6000,
            ],
            [
                'name' => 'Ali',
                'age' => 35,
                'insurance' => 'Yes',
                'salary' => 4500,
            ]
     ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 4</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 50px;

background: linear-gradient(300deg,deepskyblue,darkviolet,blue);
  background-size: 180% 180%;
  animation: gradient-animation 18s ease infinite;
        
    }


@keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
    h1 {
        color: #ffff;
    }
    .contaimer {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }
    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 200px;
        text-align: left;
        transition: all linear 0.3s;
        border: 3px solid transparent;
        cursor: pointer;

    }
    .card h2 {
        margin: 10px 0;
        color: #555;
    }

    .card:hover{
        transform: scale(1.05);
        transition: 0.3s;
        border: 3px solid #007BFF;
        box-shadow: 0 4px 20px rgba(6, 147, 255, 0.63);
    }

</style>
<body>
    
     <h1> Details Employees </h1>

     <div class="contaimer">

    <?php foreach ($employees as $employee) : ?>
        <div class="card">
            <h2>Name: <?= $employee['name'] ?></h2>
            <h2>Age: <?= $employee['age'] ?></h2>
            <h2>Insurance: <?= $employee['insurance'] ?></h2>
            <h2>Salary: <?= $employee['salary'] ?></h2>
        </div>
    <?php endforeach; ?> 
    
        </div>
        <h1> Thank you for visiting! </h1>
</body>
</html>