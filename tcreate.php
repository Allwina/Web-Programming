<?php
$dbname="allwina";
$conn = mysqli_connect("localhost","root","","allwina");
if($conn)
{
    $sql = "CREATE TABLE test11 (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     name VARCHAR(75), mark INT)";
    $res = mysqli_query($conn,$sql);
    if($res)
    {
        echo "Table test11 successfully created";
    }
    else
    {
        printf("Coundn't create table ",mysqli_error($conn));
    }

}
else{
    printf("Connect failed \n",mysqli_connect_error());
    exit();
}
mysqli_close($conn);
?>