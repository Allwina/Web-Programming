<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
        Enter the first number: <input type="text" name="num1"><br>
        Enter the second number: <input type="text" name="num2"><br>
        Select an operation:
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Division by zero is not allowed.";
                }
                break;
            default:
                echo "Invalid operation selected.";
                break;
        }
        if (isset($result)) {
            echo "Result: $result";
        }
    }
    ?>
</body>
</html>
