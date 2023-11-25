<?php
include 'config.php';

if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");
    $stdid = $_POST['stdid'];
    $stdname = $_POST['stdname'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];
   
    $sql = "SELECT 1 FROM student WHERE stdname = '$stdname' AND branch ='$branch' AND batch ='$batch' AND stdid ='$stdid'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        $row_count = mysqli_num_rows($res);
        if ($row_count > 0) {
            echo '<script>alert("Welcome, ' . $stdname . ' of ,'.$branch.$batch.'!");</script>';
        } else {
            echo '<script>alert("You are not a registered member!");</script>';
        }
    } else {
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
    <h2>Login </h2>
    <form method="post" action="mylogin.php">
        Student Id: <input type="text" name="stdid" required/><br><br>
        Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="stdname" required/><br><br>
        Branch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="branch" required/><br><br>
        Batch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="batch" required/><br><br>
        Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="age" required/><br><br>
        <input type="submit" name="submit" value="Login"/><br>
    </form>
    <h1></h1>
</div>

</body>
</html>
