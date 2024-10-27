<?php

namespace Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class Test1 {
	public function up() {
        Capsule::schema()->create('tests', function($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });
	}

	public function down() {
	    echo "Down Test1\n";
	}
}