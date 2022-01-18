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
}
