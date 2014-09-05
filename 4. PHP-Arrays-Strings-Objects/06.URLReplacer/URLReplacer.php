<?php
$text = $_POST['text'];
$pattern = '/<a href=[\'\"]([^<>]+)[\'\"]>([^<>]+)<\/a>/i';
preg_match_all($pattern, $text, $matches);
$text = preg_replace($pattern, '[URL=$1]$2[/URL]', $text);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 6. URL Replacer - result</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
<?php echo $text ?>
</body>
</html>