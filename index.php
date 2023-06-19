<?php

// Подключение системных библиотек
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/app/PHPOrm/MySQL.php';
include __DIR__ . '/app/PHPTemplater/Template.php';
include __DIR__ . '/app/PHPView/View.php';
include __DIR__ . '/app/PHPRequester/Request.php';
include __DIR__ . '/app/PHPModel/Model.php';

// Подключение системных пространств имен
use PHPTemplater\Template;
use PHPRequester\Request;
use Pecee\SimpleRouter\SimpleRouter;

// Создание системных объектов
$request = new Request();

// Подключение контроллеров
include __DIR__ . '/controllers/MainController.php';

// Подключение файла с маршрутами
include __DIR__ . '/routes/web.php';

SimpleRouter::setDefaultNamespace('controllers');

SimpleRouter::start();