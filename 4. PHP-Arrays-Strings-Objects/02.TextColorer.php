<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 2. Coloring Texts</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['text'])):
?>
<table>
    <?php
    $text = $_POST['text'];

    for($i = 0; $i < strlen($text); $i++):

        if (ord($text[$i]) % 2 == 0) :
            $classValue = 'red';
        else:
            $classValue = 'blue';
        endif;
        ?>
           <span class="<?php echo $classValue ?>">
               <?php echo $text[$i]; ?>
           </span>
    <?php

    endfor;
    else :
        ?>
        <form action="02.TextColorer.php" method="post">
            <textarea name="text"></textarea>
            <input type="submit" name="submit" value="Color text">
        </form>
    <?php
    endif
    ?>
</body>
</html>