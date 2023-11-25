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

    $sql = "INSERT INTO student (stdid, stdname, branch, batch, age) VALUES ('$stdid', '$stdname', '$branch', '$batch', '$age')";
//echo $sql;
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Data Inserted successfully!");</script>';
    } else {
        die("Error: " . mysqli_error($conn));
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
        <h2>Add student to www.Allwina.com</h2>
            <form method="post" action="add_student.php">
        Student Id: <input type="text" name="stdid" required/><br><br>
        Name:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="stdname" required/><br><br>
        Branch:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="branch" required/><br><br>
        Age: &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="age" required/><br><br>
        Batch:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="batch" required/><br><br>
        <input type="submit" name="submit" value="Add"/>
    </form>
    <h1>
  </h1>
    </div>

    
    
</body>
</html>