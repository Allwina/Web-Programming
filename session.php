<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["uname"]="admin";
    $_SERVER["pwd"] ="admin123";
    echo "Session variables set";
    ?>
    
</body>
</html>