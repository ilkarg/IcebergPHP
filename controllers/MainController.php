<?php

namespace controllers;

// Подключение моделей
include __DIR__ . '/../models/User.php';

use PHPView\View;
use PHPExceptionHandler\ExceptionHandler;
use PHPTemplater\Template;

class MainController {
    public function plus() {
        $_POST = \PHPSystem\System::getPostRouteData();
        if (isset($_POST->num1, $_POST->num2)) {
            echo $_POST->num1 + $_POST->num2;
        } else {
            echo "Данные не дошли или неверные имена полей";
        }
    }

    public static function test() {
        echo "<h3>test</h3>";
    }

    public static function test123() {
        global $template;
        echo View::createFromTemplate($template);
    }

    public static function index() {
        $template = new Template(__DIR__ . "/../pages/test.html");
        echo View::createFromTemplate($template);
        /*global $template, $orm, $request;
        $user_model = new User('Ilya', 20);
        $orm->connect();
        $user = R::dispense('user');
        $result = $user_model->validate();
        if ($result["status"]) {
            $user->name = $user_model->name;
            $user->age = $user_model->getAge();
            R::store($user);
        } else {
            ExceptionHandler::generateError($result["message"]);
        }
        //echo View::createFromTemplate($template);
        echo $template->generatePage(__DIR__ . '/../pages/test.html');
        //$data = $request->post("localhost:8001/plus", '{"num1": 2, "num2": 2}');*/
        /*if (!$data) {
            echo "false";
        } else {
            echo $data;
        }*/
    }
}