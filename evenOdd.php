<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "The number $number is even.";
            } else {
                echo "The number $number is odd.";
            }
        } else {
            echo "Please enter a valid number.";
        }
    }
    ?>
</body>
</html>
