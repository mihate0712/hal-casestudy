<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/", [LoginController::class, "goLogin"]);
// Route::post("/login", [LoginController::class, "login"]);

// Route::get("/emp/goEmpAdd", [EmpController::class, "goEmpAdd"]);
// Route::post("/emp/empAdd", [EmpController::class, "empAdd"]);

Route::get("/login", [LoginController::class, "go_login"]);
Route::post("/login", [LoginController::class, "login"]);
Route::get("/login_comp", [LoginController::class, "go_login_comp"]);


// Route::get("/user_register", [UserController::class, "go_user_register"]);
// Route::post("/user_register", [UserController::class, "user_register"]);
// Route::get("/user_comp", [UserController::class, "go_user_comp"]);
