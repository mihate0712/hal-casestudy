<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get("/vehicle_register", [VehicleController::class, "go_vehicle_register"]);
Route::post("/vehicle_register", [VehicleController::class, "vehicle_register"]);
Route::get("/conp", [VehicleController::class, "go_conp"]);

Route::get("/carView", [VehicleController::class, "carView"]);
Route::get("/carViewSearch", [VehicleController::class, "carViewSearch"]);

Route::get("/vehicleDetail/{id}", [VehicleController::class, "vehicleDetail"]);

Route::get('/auction', function () {
    return view('auction');
});

Route::get("/user_register", [UserController::class, "go_user_register"]);
Route::post("/user_register", [UserController::class, "user_register"]);
Route::get("/user_comp", [UserController::class, "go_user_comp"]);

