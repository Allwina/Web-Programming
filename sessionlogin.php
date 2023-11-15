<?php
session_start();
if(isset($_POST['submit']))
{
    if(($_POST['UserName']!="")||($_POST['Password']!=""))
    {
        $inputName = $_POST['UserName'];
        $inputPass = $_POST['Password'];
        if($inputName == "admin" && $inputPass == "admin123")
        {
            $_SESSION["UserName"] = $inputName;
            // header("Location: welcome.php ");
            exit();
        }
        else
        {
            $errormsg = "Incorrect userName or password";
        }
    }
    else{
        $errormsg = "Enter username and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php

if(isset($errormsg))
{
    echo "<p style='color: red;'>$errormsg</p>";
}
?>
    <form action="welcome.php" method="post">
        UserName: <input type="text" name = "UserName" ><br><br>
        Password: <input type="text" name ="Password"><br><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>