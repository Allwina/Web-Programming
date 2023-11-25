<?php
include 'config.php';

if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

    $stdname = $_POST['stdname'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];

    $sql = "SELECT 1 FROM student WHERE stdname = '$stdname' AND branch ='$branch' AND batch ='$batch'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        $row_count = mysqli_num_rows($res);
        if ($row_count > 0) {
            echo '<script>alert("Person Found!");</script>';
        } else {
            echo '<script>alert("Person Not Found!");</script>';
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
    <h2>Search Student </h2>
    <form method="post" action="myview.php">
        Name: <input type="text" name="stdname" required/><br>
        Branch: <input type="text" name="branch" required/><br>
        Batch: <input type="text" name="batch" required/><br>
        <input type="submit" name="submit" value="Search"/>
    </form>
    <h1></h1>
</div>

</body>
</html>
