<?php
$firstNumber = 1234.5678;
$secondNumber = 333;
$result = $firstNumber + $secondNumber;
echo '$firstNumber + $secondNumber = '.$firstNumber.' + '.$secondNumber.' = '.number_format($result, 2, '.', '');
// two numbers after the point