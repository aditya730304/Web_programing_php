<?php
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

$number = 7;

$result = checkEvenOrOdd($number);

echo "The number " . $number . " is " . $result . ".";
?>