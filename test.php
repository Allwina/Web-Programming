<!DOCTYPE html>
<?php
if(isset($_POST['submit']))
{
    $mytxt = $_POST['myName'];
    echo "<br/>Hello".$mytxt ."Welcome to php";
}
else
{?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        Enter your name in the form and hit submit button <br> Enter Name : <input type="text" name="myName" value=""><br>
        <input type="submit" name="submit" value="Greetme">
    </form>
    
</body>
</html>
<?php
}
?>