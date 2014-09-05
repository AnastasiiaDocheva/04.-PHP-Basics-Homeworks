<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 6. URL Replacer - result</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
<?php
$text = $_POST['text'];
$word = $_POST['word'];

$pattern = '/[^\.\?!]*(\b'.$word.'\b)[^\.\?!]*[\.\?!]( |$)/i';
preg_match_all($pattern, $text, $matches);

foreach($matches[0] as  $sentence){
    echo $sentence, '<br/>';
}
?>
</body>
</html>