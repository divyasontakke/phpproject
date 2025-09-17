<?php

//var_dump($_POST) ;
function add(int $a, int $b){  
    return $a + $b;
}
function subtract(int $a, int $b){
    return $a - $b ;
}

function multiply(int $a, int $b){
    return $a * $b;
}

if (isset($_POST["number1"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    switch( $operation ){
        case "add":
            $result = add($number1, $number2);
            break;
        case "subtract":
            $result = subtract($number1, $number2);
            break;
        case "multiply":
            $result = multiply($number1, $number2);
            break;
        default:
        $result = multiply($number1, $number2);
    }
}
require "index.html";
