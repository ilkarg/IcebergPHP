<?php

namespace PHPView;

use \PHPTemplater\Template;
use \PHPExceptionHandler\ExceptionHandler;
use \PHPSystem\System;

class View {
    public static function create(Template $template, string $content) {
        if (System::is_null($template) || System::is_null($content)) {
            ExceptionHandler::generate_error("Невозможно сгенерировать View из пустых значений");
        }

        if (System::ends_with($content, ".html")) {
            $content = file_get_contents($content);
        }

        $view = $template->generate_page($content);

        return $view;
    }

    public static function create_from_template(Template $template) {
        if (System::is_null($template)) {
            ExceptionHandler::generate_error("Невозможно сгенерировать View из пустых значений");
        }

        $view = $template->generate_page("");

        return $view;
    }

    public static function create_from_content(string $content) {
        if (System::is_null($content)) {
            ExceptionHandler::generate_error("Невозможно сгенерировать View из пустых значений");
        }

        if (System::ends_with($content, ".html")) {
            $content = file_get_contents($content);
        }
        
        $view = $content;

        return $view;
    }
}