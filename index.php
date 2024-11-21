<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" required><br><br>
        
        <label for="operation">Choose an operation:</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 × $num2 = $result</h3>";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
                } else {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                }
                break;
            default:
                echo "<h3>Invalid operation selected.</h3>";
        }
    }
    ?>
</body>
</html>
