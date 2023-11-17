<?php
$dbname="allwina";
$conn = mysqli_connect("localhost","root","","allwina");
if($conn)
{
    echo "Connected to ".$dbname." establihed successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
$sql ="INSERT INTO first(testField) VALUES ('$_POST[testField]')";
 $res = mysqli_query($conn,$sql);
 if($res=== TRUE)
 {
    echo "<br/>Data inserted successfully";
 }
 else
 {
    echo "Error".mysqli_error($conn);
 }
 mysqli_close($conn);
?>