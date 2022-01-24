<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\Vehicle;
use App\DAO\VehicleDAO;
use App\Http\Controllers\Controller;

class VehicleController extends Controller {
    /**
     * TOP画面表示処理。
     */
    public function go_top(Request $request) {
        $templatePath = "index";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $db = DB::connection()->getPdo();
        $vehicleDAO = new VehicleDAO($db);
        $carList = $vehicleDAO->findAll2();
        $assign["carList"] = $carList;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }
    /**
     * 車両登録画面表示処理。
     */
    public function go_vehicle_register(Request $request) {
        $templatePath = "vehicle_register";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $db = DB::connection()->getPdo();

        $assign = [];
        $assign["vehicle"] = new Vehicle();
        $assign["db"] = $db;
        $assign["session"] = $session;

        return view($templatePath, $assign);
    }
    /**
     * 車両登録処理。
     */
    public function vehicle_register(Request $request) {
        $templatePath = "conp";
        $isRedirect = false;
        $assign = [];
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }

        $db = DB::connection()->getPdo();
        $vehicleDAO = new VehicleDAO($db);

        // 画像保存
        $image_pass = $vehicleDAO->store($request);

        $vehicle_name = $request->input("vehicle_name");
        $car_id = $request->input("car_id");
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
        $option = $request->input("option");

        $vehicle = new Vehicle();
        $vehicle->setVehicleName($vehicle_name);
        $vehicle->setCarId($car_id);
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
        $vehicle->setImagePass($image_pass);
        $vehicle->setOption($option);


        // 選択肢を変換
        if($warranty_document == 0) {
            $warranty_document = "あり";
        }
        else {
            $warranty_document = "なし";
        }

        if($manual == 0) {
            $manual = "あり";
        }
        else {
            $manual = "なし";
        }

        if($fuel == 0) {
            $fuel = "ガソリン";
        }
        if($fuel == 1) {
            $fuel = "ハイオク";
        }
        else {
            $fuel = "軽油";
        }

        if($car_type_id == 0) {
            $car_type_id = "AT";
        }
        else {
            $car_type_id = "MT";
        }

        if($air_conditioning == 0) {
            $air_conditioning = "AC";
        }
        if($air_conditioning == 1) {
            $air_conditioning = "AAC";
        }
        if($air_conditioning == 2) {
            $air_conditioning = "WAC";
        }
        else {
            $air_conditioning = "無";
        }

        if($shift_lever == 0) {
            $shift_lever = "フロア";
        }
        if($shift_lever == 1) {
            $shift_lever = "コラム";
        }
        else {
            $shift_lever = "インパネ";
        }

        if($inspection == 0) {
            $inspection = "はい";
        }
        else {
            $inspection = "いいえ";
        }

        if($auction_join == 0) {
            $auction_join = "あり";
        }
        else {
            $auction_join = "なし";
        }

        $option_at = array();

        foreach($option as $m) {
            if($m == 0) {
                $m = "PS";
            }
            elseif($m == 1) {
                $m = "PW";
            }
            elseif($m == 2) {
                $m = "AW";
            }
            elseif($m == 3) {
                $m = "背面タイヤ";
            }
            elseif($m == 4) {
                $m = "カワ";
            }
            elseif($m == 5) {
                $m = "AB";
            }
            elseif($m == 6) {
                $m = "TV";
            }
            elseif($m == 7) {
                $m = "ナビ";
            }
            elseif($m == 8) {
                $m = "Rスポ";
            }

            $option_at[] = $m;

        }

        $option_at = implode(",", $option_at);

        $assign["vehicle"] = $vehicle;
        $assign["vehicle_name"] = $vehicle_name;
        $assign["car_id"] = $car_id;
        $assign["buying_price"] = $buying_price;
        $assign["model_year"] = $model_year;
        $assign["mileage"] = $mileage;
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
        $assign["image_pass"] = $image_pass;
        $assign["option"] = $option_at;
        $assign["session"] = $session;


        $id = $vehicleDAO->insert($vehicle);
        $vehicleDAO->insert2($id, $option_at);


        $assign["id"] = $id;

        $response = view($templatePath, $assign);

        return $response;
    }

    /**
     * 車両一覧画面表示処理
     */
    public function carView(Request $request){
        $templatePath = "carView";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $db = DB::connection()->getPdo();
        $vehicleDAO = new VehicleDAO($db);
        $carList = $vehicleDAO->findAll();
        $assign["carList"] = $carList;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }
    /**
     * 車両一覧画面：車種名検索
     */
    public function carViewSearch(Request $request){
        $templatePath = "carView";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $assign = [];
        $db = DB::connection()->getPdo();
        $searchWord = $request->input("search");
        $vehicle = new Vehicle();
        $vehicle->setVehicleName($searchWord);
        $vehicleDAO = new VehicleDAO($db);
        $carList = $vehicleDAO->findByName($vehicle->getVehicleName());
        $assign["carList"] = $carList;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }
    /**
     * 車両詳細画面表示処理
     */
    public function vehicleDetail(Request $request, int $id){
        $templatePath = "vehicleDetail";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $assign = [];
        $db = DB::connection()->getPdo();
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $vehicle = $vehicleDAO->findById($id);
        if($vehicle->getWarrantyDocument() == 0) {
            $warranty_document = "あり";
        }
        else {
            $warranty_document = "なし";
        }

        if($vehicle->getManual() == 0) {
            $manual = "あり";
        }
        else {
            $manual = "なし";
        }

        if($vehicle->getFuel() == 0) {
            $fuel = "ガソリン";
        }
        if($fuel == 1) {
            $fuel = "ハイオク";
        }
        else {
            $fuel = "軽油";
        }

        if($vehicle->getCarTypeId() == 0) {
            $car_type_id = "AT";
        }
        else {
            $car_type_id = "MT";
        }

        if($vehicle->getAirConditioning() == 0) {
            $air_conditioning = "AC";
        }
        if($vehicle->getAirConditioning() == 1) {
            $air_conditioning = "AAC";
        }
        if($vehicle->getAirConditioning() == 2) {
            $air_conditioning = "WAC";
        }
        else {
            $air_conditioning = "なし";
        }

        if($vehicle->getShiftLever() == 0) {
            $shift_lever = "フロア";
        }
        if($vehicle->getShiftLever() == 1) {
            $shift_lever = "コラム";
        }
        else {
            $shift_lever = "インパネ";
        }

        if($vehicle->getInspection() == 0) {
            $inspection = "検査済み";
        }
        else {
            $inspection = "検査未実施";
        }

        if($vehicle->getAuctionJoin() == 0) {
            $auction_join = "オークション登録済み(次回土曜日出品予定)";
        }
        else {
            $auction_join = "オークション未登録";
        }

        $assign["vehicle"] = $vehicle;
        $assign["warranty_document"] = $warranty_document;
        $assign["manual"] = $manual;
        $assign["fuel"] = $fuel;
        $assign["car_type_id"] = $car_type_id;
        $assign["air_conditioning"] = $air_conditioning;
        $assign["shift_lever"] = $shift_lever;
        $assign["inspection"] = $inspection;
        $assign["auction_join"] = $auction_join;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }
}

