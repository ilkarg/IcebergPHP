<?php

require __DIR__ . "/../models/Test.php";

use PHPSystem\System;
use PHPHash\Hash;
use Models\Test;
use PHPResponse\Response;

class TestController {
	public function test_post() {
		$data = System::get_request_data();
		return Response::json([
			"response" => $data
		]);
	}

	public function test_get($data) {
		/*$test = Test::create([
			"login" => "mrYatov2016", 
			"password" => "Ilya2012"
		]);*/
		return Response::json([
			"response" => $data
		], 200);
	}

	public function test_put($id) {
		$data = System::get_request_data();
		return Response::json([
			"response" => [
				"data" => $data,
				"id" => $id
			]
		]);
	}

	public function test_delete($data) {
		return Response::json([
			"response" => $data
		]);
	}
}