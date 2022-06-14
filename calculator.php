<?php
class Calculator
{
    function add($x, $y)
    {
        return $x + $y;
    }

    function subtract($x, $y)
    {
        return $x - $y;
    }

    function multiply($x, $y)
    {
        return $x * $y;
    }

    function divide($x, $y)
    {
        if ($y == '0') {
            throw new \Exception('error - на ноль делить нельзя!!');
        }

        return $x / $y;
    }

    function calculate($x, $y, $op)
    {
        switch ($op) {
            case 'add':
                return $this->add($x, $y);
                break;
            case 'subtract':
                return $this->subtract($x, $y);
                break;
            case 'multiply':
                return $this->multiply($x, $y);
                break;
            case 'divide':
                return $this->divide($x, $y);
                break;
        }
    }
}

if (isset($_POST['operation'])) {
    $oper = new Calculator();
    $result = $oper->calculate($_POST['num1'], $_POST['num2'], $_POST['operation']);
}
