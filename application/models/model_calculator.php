<?php
class Model_Calculator extends Model
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }

    public function multiply($x, $y)
    {
        return $x * $y;
    }

    public function divide($x, $y)
    {
        if ($y == '0') {
            throw new \Exception('error - на ноль делить нельзя!!');
        }

        return $x / $y;
    }
}