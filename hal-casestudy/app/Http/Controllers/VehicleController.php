<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\Vehicle;
use App\DAO\VehicleDAO;
use App\Http\Controllers\Controller;

class VehicleController extends Controller {
    /**
     * 車両登録画面表示処理。
     */
    public function go_vehicle_register(Request $request) {
        $templatePath = "vehicle_register";
        $db = DB::connection()->getPdo();
        $assign = [];
        $assign["vehicle"] = new Vehicle();
        $assign["db"] = $db;
        return view($templatePath, $assign);
    }
    /**
     * 車両登録処理。
     */
    public function vehicle_register(Request $request) {
        $templatePath = "conp";
        $isRedirect = false;
        $assign = [];

        $vehicle_name = $request->input("vehicle_name");
        $buying_price = $request->input("buying_price");
        $model_year = $request->input("model_year");
        $mileage = $request->input("mileage");
        $engine_displacement = $request->input("engine_displacement");
        $inspection_date = $request->input("inspection_date");
        $exterior_color = $request->input("exterior_color");
        $interior_color = $request->input("interior_color");
        $color_code = $request->input("color_code");
        $vehicle_identification_number = $request->input("vehicle_identification_number");
        $score = $request->input("score");
        $warranty_document = $request->input("warranty_document");
        $manual = $request->input("manual");
        $fuel = $request->input("fuel");
        $car_type_id = $request->input("car_type_id");
        $air_conditioning = $request->input("air_conditioning");
        $shift_lever = $request->input("shift_lever");
        $location = $request->input("location");
        $inspection = $request->input("inspection");
        $maker = $request->input("maker");
        $car_model = $request->input("car_model");
        $remarks = $request->input("remarks");
        $auction_join = $request->input("auction_join");

        $vehicle = new Vehicle();
        $vehicle->setVehicleName($vehicle_name);
        $vehicle->setBuyingPrice($buying_price);
        $vehicle->setModelYear($model_year);
        $vehicle->setMileage($mileage);
        $vehicle->setEngineDisplacement($engine_displacement);
        $vehicle->setInspectionDate($inspection_date);
        $vehicle->setExteriorColor($exterior_color);
        $vehicle->setInteriorColor($interior_color);
        $vehicle->setColorCode($color_code);
        $vehicle->setVehicleIdentificationNumber($vehicle_identification_number);
        $vehicle->setScore($score);
        $vehicle->setWarrantyDocument($warranty_document);
        $vehicle->setManual($manual);
        $vehicle->setFuel($fuel);
        $vehicle->setCarTypeId($car_type_id);
        $vehicle->setAirConditioning($air_conditioning);
        $vehicle->setShiftLever($shift_lever);
        $vehicle->setLocation($location);
        $vehicle->setInspection($inspection);
        $vehicle->setMaker($maker);
        $vehicle->setCarModel($car_model);
        $vehicle->setRemarks($remarks);
        $vehicle->setAuctionJoin($auction_join);
                
        $db = DB::connection()->getPdo();
        $vehicleDAO = new VehicleDAO($db);

        $assign["vehicle"] = $vehicle;
        $assign["vehicle_name"] = $vehicle_name;
        $assign["buying_price"] = $buying_price;
        $assign["model_year"] = $model_year;
        $assign["engine_displacement"] = $engine_displacement;
        $assign["inspection_date"] = $inspection_date;
        $assign["exterior_color"] = $exterior_color;
        $assign["interior_color"] = $interior_color;
        $assign["color_code"] = $color_code;
        $assign["vehicle_identification_number"] = $vehicle_identification_number;
        $assign["score"] = $score;
        $assign["warranty_document"] = $warranty_document;
        $assign["manual"] = $manual;
        $assign["fuel"] = $fuel;
        $assign["car_type_id"] = $car_type_id;
        $assign["air_conditioning"] = $air_conditioning;
        $assign["shift_lever"] = $shift_lever;
        $assign["location"] = $location;
        $assign["inspection"] = $inspection;
        $assign["maker"] = $maker;
        $assign["car_model"] = $car_model;
        $assign["remarks"] = $remarks;
        $assign["auction_join"] = $auction_join;

        $vehicleDAO->insert($vehicle);

        $response = view($templatePath, $assign);

        // if($isRedirect) {
        //     $response = redirect("/conp");
        // }
        // else {
        //     $response = view($templatePath, $assign);
        // }

        return $response;
    }
}