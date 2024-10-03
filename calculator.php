<?php

    include_once 'index.php';

    class calculator{

        function calculate($num1, $num2, $operations){
            switch($operations){
                case 'addition':
                    return $num1 + $num2;
                case 'subtraction':
                    return $num1 - $num2;
                case 'multiplication':
                    return $num1 * $num2;
                case 'division':
                    return $num1 / $num2;
                default:
                    echo "retry";
            }
        }
    }

?>