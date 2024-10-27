<?php

require __DIR__ . "/../models/Test.php";

use PHPSystem\System;
use PHPHash\Hash;
use PHPSession\Session;
use PHPResponse\Response;
use PHPToken\Token;
use PHPAuth\Auth;

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

	public function login() {
		return Response::json([
			"response" => Auth::login([
				"login" => "mrYatov1", 
				"password" => Hash::sha256("test1", "", 1)
			])
		]);
	}

    public function example() {
        $test = Test::create([
            'login' => 'example',
            'password' => 'password'
        ]);

        return Response::json([
            'message' => 'OK'
        ]);
    }

	public function registration() {
		$test = Test::create([
			"login" => "mrYatov1", 
			"password" => Hash::sha256("test1", "", 1)
		]);

		return Response::json([
			"response" => Auth::login([
				"login" => $test->login,
				"password" => $test->password
			])
		]);
	}

	public function logout() {
		return Response::json([
			"response" => Auth::logout()
		]);
	}

	public function get_user() {
		return Response::json([
			"response" => Auth::user()
		]);
	}

	public function test_authorized() {
		$data = System::get_request_data();
		if (!Auth::authorized($data["api"]->token)) {
			return Response::json([
				"response" => "Not authorized"
			]);
		}
		return Response::json([
			"response" => "Authorized"
		]);
	}
}