<?php

namespace Models;

use Illuminate\Database\Capsule\Manager as Capsule;

class Orm {
    function __construct() {
        $capsule = new Capsule();
        $capsule->addConnection([
            "driver" => "mysql",
            "host" => "localhost",
            "database" => "icebergsociety",
            "username" => "root",
            "password" => ""
        ]);
        /*$capsule->addConnection([
            "driver" => "sqlite",
            "database" => __DIR__ . "/../db.db"
        ]);*/

        $capsule->bootEloquent();
    }
}

$orm = new Orm();