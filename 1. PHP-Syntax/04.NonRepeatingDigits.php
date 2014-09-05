<?php
$n = 102;
$results = array();

for($i = 102; $i <= $n; $i++ ){

     if($i > 999){
        break;
    }

    $numberAsString = (string)$i;
    if($numberAsString[0] !== $numberAsString[1] && $numberAsString[0] !== $numberAsString[2] &&
        $numberAsString[1] !== $numberAsString[2]){

        array_push($results, $i);
    }


}

if(count($results) > 0){
    echo implode(', ', $results); // The implode() function returns a string from the elements of an array
} else {
    echo 'no';
}