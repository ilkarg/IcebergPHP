<?php

namespace PHPRequester;

use PHPExceptionHandler\ExceptionHandler;
use PHPSystem\System;

class Request {
    public function get(string $link) {
        if (System::is_null($link)) {
            ExceptionHandler::generate_error("Все поля должны быть заполнены");
        }

        $response = file_get_contents($link);

        return $response;
    }

    public function post(string $link, $data) {
        if (System::is_null($link) || System::is_null($data)) {
            ExceptionHandler::generate_error("Все поля должны быть заполнены");
        }

        if (!is_array($data)) {
            if (!System::is_json($data)) {
                ExceptionHandler::generate_error("Передан неверный формат данных");
            }
        }

        if (is_array($data)) {
            $data = json_encode($data);
        }

        $curl = curl_init($link);

        $data = <<<DATA
        $data
        DATA;


        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if($errno = curl_errno($curl)) {
            $error_message = curl_strerror($errno);
            curl_close($curl);
            ExceptionHandler::generate_error("cURL error ({$errno}):\n {$error_message}");
        }

        curl_close($curl);

        return $response;
    }
}
