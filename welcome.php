<?php
session_start();
if(isset($_SESSION["UserName"]))
{
    $welcomemessage ="Welcome ". $_SESSION["UserName"];
    echo "welcome";
}
else
{
    echo "<h1> session didn't set </h1>";
    exit();
}

?>