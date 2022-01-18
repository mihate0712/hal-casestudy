<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\Vehicle;
use App\DAO\VehicleDAO;
use App\Http\Controllers\Controller;

/**
 * 車両管理に関するコントローラークラス。
 */
class VehicleController extends Controller{
    /**
     * 車両一覧画面表示処理
     */
    public function carView(Request $request){
        $templatePath = "carView";
        $db = DB::connection()->getPdo();
        $vehicleDAO = new VehicleDAO($db);
        $carList = $vehicleDAO->findAll();
        $assign["carList"] = $carList;
        return view($templatePath, $assign);
    }
    /**
     * 車両一覧画面：車種名検索
     */
    public function carViewSearch(Request $request){
        $templatePath = "carView";
        $assign = [];
        $db = DB::connection()->getPdo();
        $searchWord = $request->input("search");
        $vehicle = new Vehicle();
        $vehicle->setVehicleName($searchWord);
        $vehicleDAO = new VehicleDAO($db);
        $carList = $vehicleDAO->findByName($vehicle->getVehicleName());
        $assign["carList"] = $carList;
        return view($templatePath, $assign);
    }
    /**
     * 車両詳細画面表示処理
     */
    public function vehicleDetail(Request $request, int $id){
        $templatePath = "vehicleDetail";
        $assign = [];
        $db = DB::connection()->getPdo();
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $vehicle = $vehicleDAO->findById($id);
        $assign["vehicle"] = $vehicle;
        return view($templatePath, $assign);
    }
}
