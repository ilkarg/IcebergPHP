<?php

require __DIR__ . "/../models/Test.php";

use PHPSystem\System;
use PHPHash\Hash;
use Models\Test;

class TestController {
	public function test_post() {
		$data = System::get_request_data();
		echo json_encode([
			"response" => $data
		]);
	}

	public function test_get($data) {
		/*$test = Test::create([
			"login" => "mrYatov2016", 
			"password" => "Ilya2012"
		]);*/
		echo json_encode([
			"response" => $data,
			"test" => $test
		]);
	}

	public function test_put($id) {
		$data = System::get_request_data();
		echo json_encode([
			"response" => [
				"data" => $data,
				"id" => $id
			]
		]);
	}

	public function test_delete($data) {
		echo json_encode([
			"response" => $data
		]);
	}
}
