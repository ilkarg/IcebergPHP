<?php

namespace PHPTemplater;

include __DIR__ . '/../PHPExceptionHandler/ExceptionHandler.php';
include __DIR__ . '/../PHPSystem/System.php';

use PHPExceptionHandler\ExceptionHandler;
use PHPSystem\System;

class Template {
    protected string $template;

    public function __construct($template) {
        if (System::ends_with($template, ".html")) {
            $template = file_get_contents($template);
        }

        if (System::is_null($template)) {
            ExceptionHandler::generate_error("Не удалось установить шаблон страницы");
        }

        $this->template = $template;
    }

    public function get_template() {
        return $this->template;
    }

    public function set_template($template) {
        if (System::ends_with($template, ".html")) {
            $template = file_get_contents($template);
        }

        if (System::is_null($template)) {
            ExceptionHandler::generate_error("Не удалось установить шаблон страницы");
        }

        $this->template = $template;
    }

    public function generate_page($content) {
        if ($content == '') {
            $content = ' ';
        }
        
        if (System::is_null($content)) {
            ExceptionHandler::generate_error("Не удалось сгенерировать страницу");
        }

        if (System::ends_with($content, ".html")) {
            $content = file_get_contents($content);
        }

        $page = str_replace("[content]", $content, $this->template);

        return $page;
    }
}
