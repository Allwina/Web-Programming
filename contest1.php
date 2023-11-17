<?php
$servername="localhost";
$username="root";
$password="";
$dbname="allwina";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connected to ".$dbname." establihed successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
?>