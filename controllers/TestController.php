<?php

use PHPSystem\System;

class TestController {
	public function testPost() {
		$data = System::getPostRouteData();
		echo json_encode([
			"response" => $data
		]);
	}

	public function testGet($data) {
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