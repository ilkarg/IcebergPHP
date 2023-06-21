<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post("/plus", [MainController::class, "plus"]);
Route::get("/test", [MainController::class, "test"]);
Route::get("/test123", [MainController::class, "test123"]);
Route::get("/", [MainController::class, "index"]);

Route::post("/test_post", [TestController::class, "testPost"]);
Route::get("/test_get/{data}", [TestController::class, "testGet"]);
Route::put("/test_put/{id}", [TestController::class, "testPut"]);
Route::delete("/test_delete/{data}", [TestController::class, "testDelete"]);