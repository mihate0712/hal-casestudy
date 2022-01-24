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

class AuctionController extends Controller{
    /**
     * オークション登録画面表示処理。
     */
    public function goAuction(Request $request){
        $templatePath = "goAuction";
        $assign = [];
        $db = DB::connection()->getPdo();

    }
}