<html>

<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <form method="POST" action="/calculator/calculate">
        <div class="container">
            <div class="col-3">
                <label for="num1">First Number</label> <br>
                <input type="number" class="form-control" name="num1" id="num1" value="<?php echo $_POST['num1'] ?>">
            </div>
            <div class="col-3">
                <label for="num2">Second Number</label> <br>
                <input type="number" class="form-control" name="num2" id="num2" value="<?php echo $_POST['num2'] ?>">
            </div>
            <div class="col-3">
                <label for="result">Result</label> <br>
                <input type="number" class="form-control" id="result" value="<?php echo $result ?>" disabled>
            </div>
            <div class="btn">
                <input type="submit" class="btn btn-primary" value="add" name="operation">
                <input type="submit" class="btn btn-primary" value="subtract" name="operation">
                <input type="submit" class="btn btn-primary" value="multiply" name="operation">
                <input type="submit" class="btn btn-primary" value="divide" name="operation">
            </div>
        </div>


    </form>
</body>

</html>