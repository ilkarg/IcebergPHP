<?php

// Подключение моделей
// require __DIR__ . '/../models/User.php';

use PHPView\View;
use PHPExceptionHandler\ExceptionHandler;
use PHPTemplater\Template;
use PHPSystem\System;

class MainController {
    public function test() {
        echo "<h3>test</h3>";
    }

    public function test123() {
        global $template;
        echo View::create_from_template($template);
    }

    public function index() {
        $template = new Template(__DIR__ . "/../pages/test.html");
        echo View::create_from_template($template);
    }
}