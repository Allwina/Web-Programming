<!DOCTYPE html>
<?php
if(isset($_POST['submit']))
{
    $num = (int)$_POST['myName'];
    $x=0;
    $n=$num;
    while(floor($num))
    {
        $mod= $num%10;
        $x=$x*10+$mod;
        $num=$num/10;

    }
    if($n==$x)
    {
        echo "$n is Palindrome";
    }
    else
    {
        echo "$n is not Palindrome";
    }
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
<form action="palindrome.php" method="post">
     <br> Enter Number : <input type="text" name="myName" value=""><br>
        <input type="submit" name="submit" value="Greetme">
    </form>
</body>
</html>
<?php
}
?>