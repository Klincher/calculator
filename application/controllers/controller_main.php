<?php

namespace Calculator\Application\Controllers;

use Calculator\Application\Core\Controller;

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('calculator_view.php', 'template_view.php');
    }
}
