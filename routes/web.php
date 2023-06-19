<?php

use Pecee\SimpleRouter\SimpleRouter as Route;
use controllers\MainController;

Route::post("/plus", [MainController::class, "plus"]);
Route::get("/test", [MainController::class, "test"]);
Route::get("/test123", [MainController::class, "test123"]);
Route::get("/", [MainController::class, "index"]);