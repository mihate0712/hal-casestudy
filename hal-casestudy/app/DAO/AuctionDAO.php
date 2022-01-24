<?php
namespace App\DAO;

use PDO;
use App\Entity\Auction;

class AuctionDAO{
    //DB接続オブジェクト。
    private PDO $db;
    public function __construct(PDO $db){
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    //オークション登録。

    //オークション全件検索。

    //車両IDによる検索。

    //落札者IDによる検索。

    //オークションの状態変更。

}