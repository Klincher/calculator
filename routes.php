<?php

use Calculator\Application\Controllers\Controller_Main;
use Calculator\Application\Controllers\Controller_Calculator;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', [Controller_Main::class, 'action_index']);
SimpleRouter::post('/calculator/calculate', [Controller_Calculator::class, 'action_calculate']);
