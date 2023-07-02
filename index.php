<?php

// Подключение системных библиотек
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/app/PHPTemplater/Template.php';
include __DIR__ . '/app/PHPView/View.php';
include __DIR__ . '/app/PHPHash/Hash.php';
include __DIR__ . '/app/PHPResponse/Response.php';

// Подключение системных пространств имен
use PHPTemplater\Template;
use PHPRequester\Request;
use Pecee\SimpleRouter\SimpleRouter;

// Подключение файла для подключения к БД
include __DIR__ . '/database/bootstrap.php';

// Подключение контроллеров
include __DIR__ . '/controllers/MainController.php';
include __DIR__ . '/controllers/TestController.php';

// Подключение файла с маршрутами
include __DIR__ . '/routes/web.php';

SimpleRouter::start();