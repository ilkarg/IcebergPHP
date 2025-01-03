<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::get("/test", [MainController::class, "test"]);
Route::get("/test123", [MainController::class, "test123"]);
Route::get("/", [MainController::class, "index"]);

Route::post("/test_post", [TestController::class, "test_post"]);
Route::get("/test_get/{data}", [TestController::class, "test_get"]);
Route::put("/test_put/{id}", [TestController::class, "test_put"]);
Route::delete("/test_delete/{data}", [TestController::class, "test_delete"]);

Route::get("/write_in_session_get/{data}", [TestController::class, "write_in_session"]);
Route::get("/read_by_session_get", [TestController::class, "read_by_session"]);
Route::get("/delete_session_get", [TestController::class, "delete_session"]);

Route::get("/test_login", [TestController::class, "login"]);
Route::get("/test_registration", [TestController::class, "registration"]);
Route::get("/test_logout", [TestController::class, "logout"]);
Route::get("/test_get_user", [TestController::class, "get_user"]);

Route::post("/test_authorized", [TestController::class, "test_authorized"]);

Route::get('/example', [TestController::class, "example"]);