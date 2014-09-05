<?php

if (isset($_GET['list']) && isset($_GET['maxSize'])) {
    $list = $_GET['list'];
    $maxSize = $_GET['maxSize'];

    $array = str_replace("\n\r", "", htmlentities($list));
    $array2 = str_replace("\r", "", $array);
    $tagText = explode("\n", $array2);

    echo "<ul>";
    foreach ($tagText as $line) {
        $trimmed = trim($line);
        if (strlen(html_entity_decode($trimmed)) > $maxSize) {
            $array3 = substr(html_entity_decode($trimmed), 0, $maxSize);
            echo "<li>".htmlentities($array3)."..."."</li>";
        }
        else {
            $array3 = substr(html_entity_decode($trimmed), 0, $maxSize);
            echo "<li>".htmlentities($array3)."</li>";
        }

    }
    echo "</ul>";
}