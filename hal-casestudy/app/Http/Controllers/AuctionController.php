<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\Vehicle;
use App\Entity\Auction;
use App\Entity\User;
use App\DAO\VehicleDAO;
use App\DAO\AuctionDAO;
use App\DAO\UserDAO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VehicleController;

class AuctionController extends Controller{
    /**
     * オークション登録画面表示処理。
     */
    public function insertAuction(Request $request, int $id){
        $templatePath = "goAuction";
        $assign = [];
        $session = 0;
        if($request->session()->has("id")){
            $session = 1;
        }else{
            $session = 0;
        }
        $db = DB::connection()->getPdo();
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $vehicle = $vehicleDAO->findById($id);
        $assign["vehicle"] = $vehicle;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }

    /**
     * オークション登録処理
     */
    public function goAuction(Request $request){
        $templatePath = "auctionComplete";
        $session = 0;
        $assign = [];
        if($request->session()->has("id")){
            $session = 1;
        }else{
            $session = 0;
        }
        $id = $request->input("id");
        $db = DB::connection()->getPdo();
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $auction = new Auction();
        $auctionDAO = new AuctionDAO($db);
        $vehicle = $vehicleDAO->update($id);
        $vehicleIdSet = $id;
        $auction = $auctionDAO->insertAuction($vehicleIdSet);
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $vehicle = $vehicleDAO->findById($id);
        $assign["vehicle"] = $vehicle;
        $assign["session"] = $session;
        $response = view($templatePath, $assign);
        return $response;
    }

    /**
     * オークション画面表示処理。
     */
    public function showAuction(Request $request, int $id){
        $templatePath = "auction";
        $assign = [];
        $db = DB::connection()->getPdo();
        $vehicle = new Vehicle();
        $vehicleDAO = new VehicleDAO($db);
        $vehicle = $vehicleDAO->findById($id);
        $option = $vehicleDAO->findByOption($id);
        $auction = new Auction();
        $auctionDAO = new AuctionDAO($db);
        $auction = $auctionDAO->findByVehicleId($id);

        $assign["auction"] = $auction;
        $assign["vehicle"] = $vehicle;
        $assign["option"] = $option;
        return view($templatePath, $assign);
    }
}