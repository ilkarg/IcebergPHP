<?php

namespace PHPAuth;

use PHPSession\Session;
use PHPToken\Token;
use Models\Test;

class Auth {
	private static $model = null;
	
	public static function login($data) {
		if (Session::value_exists("user")) {
			return false;
		}

		if (!is_array($data)) {
			return false;
		}
		
		$request_data = [];
		
		foreach ($data as $key => $value) {
			$request_data[] = [$key, "=", $value];
		}

		$user = self::$model::where($request_data)->first();
		
		if ($user) {
			$user->token = Token::generate($user->login);
			Session::set_value("user", $user);
			return $user->token;
		}
		
		return false;
	}
	
	public static function authorized($token) {
		return Session::value_exists("user") != null && Token::valid($token);
	}
	
	public static function logout() {
		if (!Session::value_exists("user")) {
			return false;
		}
		
		Session::remove_value("user");
		
		return true;
	}
	
	public static function user() {
		return Session::get_value("user");
	}
	
	public static function set_model($model) {
		self::$model = $model;
	}
	
	public static function get_model() {
		return self::$model;
	}
}