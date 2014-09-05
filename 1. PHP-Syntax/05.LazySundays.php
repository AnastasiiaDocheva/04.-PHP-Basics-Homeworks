<?php
$currentMonth = date('m'); // date('m') Formats a local date and time (month only)
$timestampSunday = strtotime("first Sunday of this month"); // strtotime() Parses an English textual datetime into a Unix timestamp
                                                            // (the number of seconds since January 1 1970 00:00:00 GMT)
do {
    $sundayDate = date('jS F, Y', $timestampSunday);
    echo $sundayDate . "\n";
    // Prints the day, date, month, year, time, AM or PM
    // echo date("l jS \of F Y h:i:s A") . "<br>";
    // http://www.w3schools.com/php/func_date_date.asp
    $timestampSunday += 7 * 24 * 60 * 60; // ???
} while ($currentMonth == date('m', $timestampSunday));