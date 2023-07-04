<?php

namespace PHPToken;

use PHPSession\Session;
use PHPHash\Hash;

class Token {
	public static function generate($value, $algorithm="sha256") {
		if ($algorithm != "sha256" && $algorithm != "md5") {
			return "Выбран некорректный алгоритм хеширования";
		}
		return $algorithm == "sha256" ? Hash::sha256($value, "", 1) : Hash::md5($value, "", 1);
	}

	public static function valid($token) {
		if (!Session::value_exists("user")) {
			return "false";
		}

		$user_token = is_array(Session::get_value("user")) ? Session::get_value("user")["token"] : Session::get_value("user")->token;

		if ($user_token == null || $user_token != $token) {
			return false;
		}

		return true;
	}
}