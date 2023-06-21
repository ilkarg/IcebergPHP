<?php

require __DIR__ . "/../models/User.php";

use PHPSystem\System;
use PHPHash\Hash;

class TestController {
	public function testPost() {
		$data = System::getPostRouteData();
		echo json_encode([
			"response" => $data
		]);
	}

	public function testGet($data) {
		User::insert(User::$table, ["login" => "mrProger", "password" => Hash::sha256("Ilya123", "", 1)]);
		echo json_encode([
			"response" => $data
		]);
	}

	public function testPut($id) {
		$data = System::getPostRouteData();
		echo json_encode([
			"response" => [
				"data" => $data,
				"id" => $id
			]
		]);
	}

	public function testDelete($data) {
		echo json_encode([
			"response" => $data
		]);
	}
}