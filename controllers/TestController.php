<?php

require __DIR__ . "/../models/Test.php";

use PHPSystem\System;
use PHPHash\Hash;
use Models\Test;

class TestController {
	public function testPost() {
		$data = System::getRequestData();
		echo json_encode([
			"response" => $data
		]);
	}

	public function testGet($data) {
		$test = Test::create([
			"login" => "mrYatov2016", 
			"password" => "Ilya2012"
		]);
		echo json_encode([
			"response" => $data,
			"test" => $test
		]);
	}

	public function testPut($id) {
		$data = System::getRequestData();
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
