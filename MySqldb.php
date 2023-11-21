<?php
$conn = mysqli_connect("localhost","root","","allwina");
if($conn){
    $sql ="SELECT * FROM test";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        echo " <table border='border' width='300'><tr><td>id</td><td width ='250'>My Message</td></tr>";
        while($row = mysqli_fetch_assoc($res))
        {
            echo "<tr><td>".$row["id"]."</td><td>".$row["testField"]."</td></tr>";
        }
        echo"</table>";
    }
    else
    {
     echo "0 results";
    }
}
else{
     die("Connection failed :".mysqli_connect_error());
}
mysqli_close($conn);
?>