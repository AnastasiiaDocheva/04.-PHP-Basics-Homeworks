<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 7. Form Data</title>
    <style>
        div{
            margin: 5px;
        }

        div:last-of-type {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form action="07.GetFormData.php" method="get">
    <div><input type="text" name="name" placeholder="Name"></div>
    <div><input type="text" name="age" placeholder="Age"></div>
    <div><input type="radio" name="gender" id="male" value="male"><label for="male"> Male</label></div>
    <div><input type="radio" name="gender" id="female" value="female"><label for="female"> Female</label></div>
    <input type="submit" value="Send">
</form>

<div>
    <?php
        if(isset($_GET['name'])) { // isset() function checks if the "views" variable has already been set
           echo  "My name is {$_GET['name']}. I am {$_GET['age']} year old. I am {$_GET['gender']}.";
        }
    ?>
</div>


</body>
</html>

