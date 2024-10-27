<?php

namespace Models;

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    "driver" => "mysql",
    "host" => "mysql.3459d9cf4626.hosting.myjino.ru",
    "database" => "j33800575_example",
    "username" => "j33800575_123",
    "password" => "Ilya2002"
]);
/*$capsule->addConnection([
    "driver" => "sqlite",
    "database" => __DIR__ . "/../db.db"
]);*/

$capsule->setAsGlobal();
$capsule->bootEloquent();