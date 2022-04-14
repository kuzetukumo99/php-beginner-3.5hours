
<?php
/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad';// String
$age = 40; //Int
$has_kids = false; // Bool
$cash_on_hand = 20.75; // Float

//var_dump($cash_on_hand);

//echo '$name is $age years old';//これでは変数の値は代入されない
//echo $name . ' is ' . $age . ' years old'.'<br>'; //php では +と.が同じ意味

//echo "${name} is ${age} years old".'<br>';

//echo 5 + 5;
$x = '5' + '5';
// var_dump($x);
// echo 10 - 5 .'<br>';
// echo 5 * 6 .'<br>';
// echo 10 * 2 .'<br>';
// echo 10 % 3 .'<br>';

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;