<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 1. Word Mapping</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['text'])):
    ?>
    <table>

        <?php
        $text = strtolower($_POST['text']);
        $words = preg_split("/\W+/", $text, -1, PREG_SPLIT_NO_EMPTY);
        $frequencies = array_count_values($words);
        foreach ($frequencies as $key => $word):
            ?>
            <tr>
                <td>
                    <?php echo $key; ?>
                </td>
                <td>
                    <?php echo $word; ?>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
<?php
else :
    ?>
    <form action="01.WordMapper.php" method="post">
        <textarea name="text"></textarea>
        <input type="submit" name="submit" value="Count words">
    </form>
<?php
endif
?>
</body>
</html>