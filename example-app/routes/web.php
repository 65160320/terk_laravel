<?php

use App\Http\Controllers\friendsController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



Route::get("/login",[userController::class,"login_view"]) -> name("login");
Route::get("/register",[userController::class,"register_view"]) -> name("register");

Route::post("/login",[userController::class,"login_auth"]);
Route::post("/register",[userController::class,"register_store"]);

Route::get("/logout",[userController::class,"logout"]);


Route::resource("/friends",friendsController::class)-> middleware("auth");
