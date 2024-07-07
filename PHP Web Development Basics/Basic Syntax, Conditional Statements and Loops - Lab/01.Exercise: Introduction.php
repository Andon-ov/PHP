<?php

//01. Student Information

//$name = 'John';
//$age = '15';
//$grade = '5.40';
//echo "Name: $name, Age: $age, Grade: $grade";

//02.Sum Two Numbers

//$firstNumber = 2;
//$secondNumber = 5;
//$sum =floatval( $firstNumber + $secondNumber);
//$sumFormat  =number_format($sum, 2, '.', '');
//echo "\$firstNumber + \$secondNumber = $firstNumber + $secondNumber = $sumFormat";

//03.Foreign Languages
// $countryName = trim(readline("Enter your country name: "));
// $countryName = "USA";
$countryName = "Germany";


// Use a switch statement to determine the language
switch ($countryName) {
    case "USA":
    case "England":
        echo "English";
        break;

    case "Spain":
    case "Argentina":
    case "Mexico":
        echo "Spanish";
        break;

    default:
        echo "unknown";
        break;
}

