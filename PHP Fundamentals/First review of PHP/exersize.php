<?php
// String Operators

$name = readline();
$age = readline();
$grade = readline();

// 1.Options
echo 'Name: ' . $name . ', Age: ' . $age . ', Grade: ' . $grade . '.';

// 2.Options
print_r("Name: $name, Age: $age, Grade: $grade.");

// 3.Options
echo "Name: {$name}, Age: {$age}, Grade: {$grade}";

// 4.Options
$output = sprintf('Name: %s, Age: %s, Grade: %s.', $name, $age, $grade);
echo $output;

// PHP if...else...elseif Statements

// $age = intval(readline());
$age = 10;

if ($age >= 0 && $age <= 2) {
    echo 'You are a baby.';
} elseif ($age >= 3 && $age <= 13) {
    echo 'You are a child.';
} elseif ($age >= 14 && $age <= 19) {
    echo 'You are a teenager.';
} elseif ($age >= 20 && $age <= 65) {
    echo 'You are an adult.';
} elseif ($age >= 66) {
    echo 'You are an elder.';
} else {
    echo 'Invalid age.';
}

// PHP - The switch Statement
// $number = intval(readline());
$number = 20;


switch (true) {
    case ($number % 6 === 0):
        echo "The number is divisible by 6";
        break;
    case ($number % 10 === 0):
        echo "The number is divisible by 10";
        break;
    case ($number % 7 === 0):
        echo "The number is divisible by 7";
        break;
    case ($number % 3 === 0):
        echo "The number is divisible by 3";
        break;
    case ($number % 2 === 0):
        echo "The number is divisible by 2";
        break;
    default:
        echo "Not divisible";
        break;
}

// for loop
for ($i = 0; $i < 5; $i++) {
    // Code to be executed repeatedly
    echo $i . ' ';
}
// Output: 0 1 2 3 4

// while loop
$i = 0;
while ($i < 5) {
    // Code to be executed repeatedly
    echo $i . ' ';
    $i++;
}
// Output: 0 1 2 3 4


// do-while loop
$i = 0;
do {
    // Code to be executed repeatedly
    echo $i . ' ';
    $i++;
} while ($i < 5);
// Output: 0 1 2 3 4


// foreach loop

$fruits = ["Apple", "Banana", "Orange"];
foreach ($fruits as $fruit) {
    // Code to be executed for each element in the array
    echo $fruit . ' ' ;
}
// Output: Apple Banana Orange


// Data Types and Variables

// Integer (int)
$age = 30;

// Float (floating-point number)
$price = 25.99;

// String
$name = "John Doe";

// Boolean (bool)
$isLogged = true;

// Array
$fruits = array("Apple", "Banana", "Orange");

// Object
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "John Doe";
$person->age = 30;

// NULL
$noValue = NULL;

// Resource
$database = mysqli_connect("localhost", "username", "password", "database");
