<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["Add"]))
    {
        $n1 = (float)$_GET['num1'];
        $n2 = (float)$_GET['num2'];
        $r = $n1 + $n2 ;
      
    }
    if(isset($_GET["Subtract"]))
    {
        $n1 = (float)$_GET['num1'];
        $n2 = (float)$_GET['num2'];
        $r = $n1 - $n2 ;
      
    }
    if(isset($_GET["Multiply"]))
    {
        $n1 = (float)$_GET['num1'];
        $n2 = (float)$_GET['num2'];
        $r = $n1 * $n2 ;
      
    }
    if(isset($_GET["Divide"]))
    {
        $n1 = (float)$_GET['num1'];
        $n2 = (float)$_GET['num2'];
        $r = $n1 / $n2 ;
      
    }
    ?>
    <form action="" method="get">
        <h1>PHP - Simple Calculator</h1>
        <input type="text" name="num1" value ="<?php echo $n1?>"> First Number <br><br>
        <input type="text" name="num2" value ="<?php echo $n2?>"> Second Number <br><br>
        <input type="text" name="result" value ="<?php echo $r?>"> Result <br><br>
        <input type="submit" name ="Add" value="Add" >
        <input type="submit" name ="Subtract" value="Subtract">
        <input type="submit" name = "Multiply" value="Multiply">
        <input type="submit" name ="Divide" value="Divide">
    </form>
    
</body>
</html>