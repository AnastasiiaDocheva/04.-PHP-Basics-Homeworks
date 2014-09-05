<!DOCTYPE html>
<?php

class Map {
    var $tagName;
    var $count;

    function Map($tag, $count) {
        $this->tagName = $tag; //$this содержит объект для которого был вызван метод в данный момент времени
        $this->count = $count;
    }

    function getTagName () {
        return $this->tagName;
    }
    function getCount() {
        return $this->count;
    }
}
function isInArray($newMap, $map) {
    foreach ($map as $item) {
        $var1 = $newMap->tagName;
        $var2 = $newMap->count;
        if($item->tagName == $newMap->tagName) {
            return true;
        }
    }
    return false;
}
function FindAndIncrease($key, $map) {
    foreach ($map as $item) {
        if($item->tagName == $key) {
            $item->count++;
            break;
        }
    }
}
function sortByValue($a, $b) {
    return $b->count - $a->count;

}
if(isset($_GET['tags'])) {
    $tagText = explode(", ", $_GET['tags']);
    //$tagText = array('Valeri', 'Bob', 'Chris', 'Bob', 'Chris', 'Valeri', 'Valeri');
    $map = array();

    foreach ($tagText as $tag) {
        $newTag = new Map($tag, 0);
        if(!isInArray($newTag, $map)) {
           $map[] = $newTag;
        }
        FindAndIncrease($tag, $map);

    }
    usort($map, 'sortByValue');

    $content = '<div class="result">';
    foreach ($map as $item) {
        $content .= $item->tagName . ': ' . $item->count . '</br>';
    }

    $content .= '</div>';
}
?>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
<form action="MostFrequentTag.php" method="get">
    <input type="text" name="tags" required="true"/><br/>
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
<?php
if(isset($content))
    echo $content
?>
</body>
</html>