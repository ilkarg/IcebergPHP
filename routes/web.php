<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post("/plus", [MainController::class, "plus"]);
Route::get("/test", [MainController::class, "test"]);
Route::get("/test123", [MainController::class, "test123"]);
Route::get("/", [MainController::class, "index"]);

Route::post("/test_post", [TestController::class, "test_post"]);
Route::get("/test_get/{data}", [TestController::class, "test_get"]);
Route::put("/test_put/{id}", [TestController::class, "test_put"]);
Route::delete("/test_delete/{data}", [TestController::class, "test_delete"]);