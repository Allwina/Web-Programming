<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name"> <br><br>
        Height: <input type="text" name="height"> <br><br>
        Favourite Color: <input type="text" name="color"> <br><br>
        <input type="submit" value="Write Cookie" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        define("FIVE_DAYS",60*60*24*5);
        setcookie("name",$_POST["name"],time()+FIVE_DAYS);
        setcookie("height",$_POST["height"],time()+FIVE_DAYS);
        setcookie("color",$_POST["color"],time()+FIVE_DAYS);
        $name =$_COOKIE["name"];
        $height =$_COOKIE["height"];
        $color=$_COOKIE["cookie"];
        echo "Cookies set successfully";
        echo " <p> $name </p><p> Height: $height <p>";
    }
    ?>
</body>
</html>