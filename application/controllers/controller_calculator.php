<?php

class Controller_Calculator extends Controller
{
    function __construct() {
        $this->model = new Model_Calculator();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('calculator_view.php', 'template_view.php');
    }

    function action_calculate()
    {
        $x = $_POST['num1'];
        $y = $_POST['num2'];
        $op = $_POST['operation'];
        $result['result'] = null;

        if (isset($_POST['operation'])) {
            switch ($op) {
                case 'add':
                    $result['result'] = $this->model->add($x, $y);
                    break;
                case 'subtract':
                    $result['result'] = $this->model->subtract($x, $y);
                    break;
                case 'multiply':
                    $result['result'] = $this->model->multiply($x, $y);
                    break;
                case 'divide':
                    $result['result'] = $this->model->divide($x, $y);
                    break;
            }

            $this->view->generate('calculator_view.php', 'template_view.php', $result);
        }
    }
}
