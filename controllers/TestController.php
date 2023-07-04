<?php

require __DIR__ . "/../models/Test.php";

use PHPSystem\System;
use PHPHash\Hash;
use PHPSession\Session;
use PHPResponse\Response;
use PHPToken\Token;

use Models\Test;

class TestController {
	public function test_post() {
		$data = System::get_request_data();
		return Response::json([
			"response" => $data,
			"token_valid" => Token::valid($data["api"]->token)
		]);
	}

	public function test_get($data) {
		/*$test = Test::create([
			"login" => "mrYatov2016", 
			"password" => "Ilya2012"
		]);*/

		Session::set_value("user", ["token" => Token::generate("asd")]);

		return Response::json([
			"response" => $data,
			"token" => Session::get_value("user")
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

	public function write_in_session($data) {
		Session::set_value("test_key", $data);
		return Response::json([
			"response" => "OK",
			"data" => $data
		]);
	}

	public function read_by_session() {
		return Response::json([
			"response" => "OK",
			"data" => Session::get_value("test_key")
		]);
	}

	public function delete_session() {
		Session::remove_all_values();
		return Response::json([
			"response" => "OK",
			"data" => Session::get_all_values()
		]);
	}
}