<?php

namespace PHPSession;

class Session {
  public static function set_value($key, $value) {
    session_start();
    $_SESSION[$key] = $value;
  }

  public static function set_values(array $array) {
    session_start();
    foreach ($array as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }

  public static function get_value($key) {
    session_start();
    return $_SESSION[$key];
  }

  public static function get_values(array $keys) {
    session_start();
    $response = [];
    foreach ($keys as $key) {
      $response[$key] = $_SESSION[$key];
    }
    return $response;
  }

  public static function get_all_values() {
    session_start();
    return $_SESSION;
  }

  public static function remove_value($key) {
    session_start();
    unset($_SESSION[$key]);
  }

  public static function remove_values(array $keys) {
    session_start();
    foreach ($keys as $key) {
      unset($_SESSION[$key]);
    }
  }

  public static function remove_all_values() {
    session_start();
    session_unset();
  }
}