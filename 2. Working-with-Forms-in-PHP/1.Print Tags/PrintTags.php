<!DOCTYPE html>
<?php
if(isset($_GET['tags'])) {
    $tagText = explode(",", $_GET['tags']);
    $content = '<div class="result">';
    for($i = 0; $i < count($tagText) ;$i++) {
        $content .= "$i: $tagText[$i]" . '<br/>';
    }
}
?>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
    <form action="PrintTags.php" method="get">
        <input type="text" name="tags" required="true"/><br/>
        <input type="submit" name="submitBtn" value="Submit"/>
    </form>
    <?php
        if(isset($content))
            echo $content
    ?>
</body>
</html>