<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\Auction;
use App\Entity\Vehicle;
use App\DAO\AuctionDAO;
use App\DAO\VehicleDAO;
use App\Http\Controllers\Controller;

/**
 * オークション管理に関するコントローラクラス
 */
class AuctionController extends Controller{
    /**
     * auction登録画面表示処理
     */
    public function auctionAdd(Request $request){
        $templatePath = "auctionAdd";
        $assign = [];
        
    }
}
