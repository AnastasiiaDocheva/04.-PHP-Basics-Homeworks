<?php
$text = $_POST['text'];
$banlist = explode(', ',$_POST['banlist']);

foreach($banlist as  $word){
    $wordMask = str_pad('*', strlen($word), '*');
    $text = str_replace($word, $wordMask, $text);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 4. Text Filter</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
<?php
echo $text;
?>
</body>
</html>