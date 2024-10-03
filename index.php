<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h4>Enter the first number</h4><br>
        <input type="number" name="num1"><br>
        <h4>Enter the second number</h4>
        <input type="number" name="num2"><br><br>
        <input type="radio" name="operation" value="addition">Addition <br>
        <input type="radio" name="operation" value="subtraction">subtraction <br>
        <input type="radio" name="operation" value="multiplication">Multiplication <br>
        <input type="radio" name="operation" value="division">division <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    include_once 'calculator.php';

    if($_SERVER["REQUEST_METHOD"] === 'POST'){

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operations = $_POST["operation"];


        if(!empty($num1) && !empty($num2) && isset($operations)){
            echo '<div class="message success">Data captured successfully</div>';

            $calculations = new calculator();

            $result = $calculations->calculate($num1, $num2, $operations);
    
            echo '<div class="message success">Result: ' . $result . '</div>';
        }else{
            echo '<div class="message error">Fill all the brackets</div>';
        }
    }else{
        echo '<div class="message error">Check your data set</div>';
    }
?>