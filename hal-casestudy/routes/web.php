<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

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

Route::get("/vehicle_register", [VehicleController::class, "go_vehicle_register"]);
Route::post("/vehicle_register", [VehicleController::class, "vehicle_register"]);
Route::get("/conp", [VehicleController::class, "go_conp"]);

<<<<<<< HEAD

=======
Route::get("/carView", [VehicleController::class, "carView"]);
Route::get("/carViewSearch", [VehicleController::class, "carViewSearch"]);
<<<<<<< HEAD
=======
Route::get("/vehicleDetail/{id}", [VehicleController::class, "vehicleDetail"]);
>>>>>>> #vehicle_detail
>>>>>>> 81afd6526d1b6c956f6781b02a8bd8acb153d454
