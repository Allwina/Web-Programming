<?php
include 'config.php';

if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");
    $stdid = $_POST['stdid'];
    
   
    $sql = "DELETE FROM student
    WHERE stdid='$stdid';
    ";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Deleted!");</script>';
    } else {
        echo '<script>alert("Not Deleted!");</script>';
        echo '<script>alert("Error executing query: ' . mysqli_error($conn) . '");</script>';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website www.Allwina.com</title>
    <link href="mystyle.css" rel="stylesheet"/>
</head>
<body>

<?php
include 'myheader.html';
?>
<div class="content">
    <h2>Delete Student </h2>
    <form method="post" action="mydelete.php">
        Student Id: <input type="text" name="stdid" required/><br><br>
       
        
        <input type="submit" name="submit" value="Delete"/><br>
    </form>
    <h1></h1>
</div>

</body>
</html>
