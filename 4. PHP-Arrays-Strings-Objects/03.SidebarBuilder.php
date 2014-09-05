<?php function printSidebar($header, $list)
{ ?>
    <div class="bar">
        <h1><?php echo $header ?></h1>
        <hr/>
        <ul>
            <?php
            $elements = explode(', ', $list);
            foreach ($elements as $element): ?>
                <li>
                    <?php echo $element; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 3. Sidebar Builder</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<?php if (isset($_POST['submit'])):
    foreach($_POST as $header => $list):
        if($header !== 'submit') printSidebar($header, $list);
    endforeach;
else: ?>
<form action="03.SidebarBuilder.php" method="post">
    <div>
        <label>Categories: </label>
        <input type="text" name="Categories">
    </div>
    <div>
        <label>Tags: </label>
        <input type="text" name="Tags">
    </div>
    <div>
        <label>Months: </label>
        <input type="text" name="Months">
    </div>
    <input type="submit" name="submit" value="Generate">
</form>
<?php endif ?>
</body>
</html>