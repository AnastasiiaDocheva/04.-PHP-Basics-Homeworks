<?php
$input = (object)[2,34];

if(is_numeric($input)) {
    var_dump($input); // var_dump() function returns the data type and value of variables
} else {
    echo gettype($input);
}