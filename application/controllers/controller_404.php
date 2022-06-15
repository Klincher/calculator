<?php

namespace Calculator\Application\Controllers;

use Calculator\Application\Core\Controller;

class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}
