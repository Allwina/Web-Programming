<?php
include 'config.php';

if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");
    $stdid = $_POST['stdid'];
    $stdname = $_POST['stdname'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];
    $age = $_POST['age'];
   
    $sql = "UPDATE student
        SET stdname = '$stdname', branch='$branch', batch='$batch', age='$age'
        WHERE stdid='$stdid';";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Updated!");</script>';
    } else {
        echo '<script>alert("Not Updated!");</script>';
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
    <h2>Update Student </h2>
    <form method="post" action="myupdate.php">
        Student Id: <input type="text" name="stdid" required/><br>
        Details to be updated <br><br>
        Name: <input type="text" name="stdname" required/><br><br>
        Branch: <input type="text" name="branch" required/><br><br>
        Batch: <input type="text" name="batch" required/><br><br>
        Age: <input type="number" name="age" required/><br><br>
        <input type="submit" name="submit" value="Update"/><br>
    </form>
    <h1></h1>
</div>

</body>
</html>
