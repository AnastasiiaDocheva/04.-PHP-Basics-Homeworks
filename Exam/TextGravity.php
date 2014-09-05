<?php

if (isset($_GET['text']) && isset($_GET['lineLength'])) {

    $text = $_GET['text'];
    $lineLength = $_GET['lineLength'];

    $textLength = strlen($text);
    $rowsNumber = ceil($textLength / $lineLength);
    #echo $rowsNumber."</br>";

    $remainder = $lineLength - $textLength % $lineLength;
    #echo $remainder."</br>";

    for ($n = 1; $n <= $remainder; $n++) {
        $text = $text." ";
    }
    #echo strlen($text)."</br>";

    $parts = str_split($text, $lineLength);
    foreach ($parts as $line) {
       echo $line."<br/>";

    }
}