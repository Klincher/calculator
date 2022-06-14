<?php
include 'calculator.oop.php';
?>

<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <form method="POST" action="">
        <div>
            <input type="number" name="num1" id="num1" value="<?php echo $_POST['num1'] ?>">
            <label for="num1">First Number</label> <br>
        </div>
        <div>
            <input type="number" name="num2" id="num2" value="<?php echo $_POST['num2'] ?>">
            <label for="num2">Second Number</label> <br>
        </div>
        <div>
            <input type="number" id="result" value="<?php echo $result ?>" disabled>
            <label for="result">Result</label> <br>
        </div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="subtract" name="operation">
        <input type="submit" value="multiply" name="operation">
        <input type="submit" value="divide" name="operation">
    </form>
</body>

</html>