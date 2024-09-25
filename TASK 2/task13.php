<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

$celsius = 25;

$fahrenheit = celsiusToFahrenheit($celsius);

echo $celsius . " degrees Celsius is equal to " . $fahrenheit . " degrees Fahrenheit.";
?>