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
    public function insertAuction(int $id): int{
        $sqlInsert = "INSERT INTO auctions(current_prices, sold_price, auction_status, user_id, vehicle_id, deliver_car_status, payment, start_date, sold_date, create_date, payment_date) VALUES(:current_prices, :sold_price, :auction_status, :user_id, :vehicle_id, :deliver_car_status, :payment, :start_date, :sold_date, :create_date, :payment_date)";
        $stmt = $this->db->prepare($sqlInsert);
        $stmt->bindValue(":current_prices", 0, PDO::PARAM_INT);
        $stmt->bindValue(":sold_price", 0, PDO::PARAM_INT);
        $stmt->bindValue(":auction_status", 0, PDO::PARAM_INT);
        $stmt->bindValue(":user_id", 1, PDO::PARAM_INT);
        $stmt->bindValue(":vehicle_id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":deliver_car_status", 0, PDO::PARAM_INT);
        $stmt->bindValue(":payment", 0, PDO::PARAM_INT);
        $stmt->bindValue(":start_date", date("Y-m-d H:i:s",strtotime("next Saturday")), PDO::PARAM_STR);
        $stmt->bindValue(":sold_date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $stmt->bindValue(":create_date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $stmt->bindValue(":payment_date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $result = $stmt->execute();
        if($result){
            $auctionId = $this->db->lastInsertId();
            $sqlUpdate = "UPDATE vehicles SET auction_join = :auction_join WHERE id = :id";
            $stmt = $this->db->prepare($sqlUpdate);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->bindValue(":auction_join", 0, PDO::PARAM_INT);
            $result = $stmt->execute();
            return $result;
        }else{
            $auctionId = -1;
        }
        return $auctionId;
    }
    //オークション全件検索。
    public function findAll(): array{
        $sql = "SELECT * FROM auctions ORDER BY id";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        $auctionList = [];
        while($row = $stmt->fetch()){
            $id = $row["id"];
            $currentPrices = $row["current_prices"];
            $soldPrice = $row["sold_price"];
            $auctionStatus = $row["auction_status"];
            $userId = $row["user_id"];
            $vehicleId = $row["vehicle_id"];
            $deliverCarStatus = $row["deliver_car_status"];
            $payment = $row["payment"];
            $startDate = $row["start_date"];
            $soldDate = $row["sold_date"];
            $createDate = $row["create_date"];
            $paymentDate = $row["payment_date"];
            $auction = new Auction();
            $auction->setId($id);
            $auction->setCurrentPrice($currentPrices);
            $auction->setSoldPrice($soldPrice);
            $auction->setAuctionStatus($auctionStatus);
            $auction->setUserId($userId);
            $auction->setVehicleId($vehicleId);
            $auction->setDeliverCarStatus($deliverCarStatus);
            $auction->setPayment($payment);
            $auction->setStartDate($startDate);
            $auction->setSoldDate($soldDate);
            $auction->setCreateDate($createDate);
            $auction->setPaymentDate($paymentDate);
            $auctionList[$id] = $auction;
        }
        return $auctionList;
    }

    //車両IDによる検索。
    public function findByVehicleId(int $vehicleId): ?Auction{
        $sql = "SELECT * FROM auctions WHERE vehicle_id = :vehicle_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":vehicle_id", $vehicleId, PDO::PARAM_INT);
        $result = $stmt->execute();
        $auction = null;
        if($result && $row = $stmt->fetch()){
            $id = $row["id"];
            $currentPrices = $row["current_prices"];
            $soldPrice = $row["sold_price"];
            $auctionStatus = $row["auction_status"];
            $userId = $row["user_id"];
            $vehicleId = $row["vehicle_id"];
            $deliverCarStatus = $row["deliver_car_status"];
            $payment = $row["payment"];
            $startDate = $row["start_date"];
            $soldDate = $row["sold_date"];
            $createDate = $row["create_date"];
            $paymentDate = $row["payment_date"];
            $auction = new Auction();
            $auction->setId($id);
            $auction->setCurrentPrice($currentPrices);
            $auction->setSoldPrice($soldPrice);
            $auction->setAuctionStatus($auctionStatus);
            $auction->setUserId($userId);
            $auction->setVehicleId($vehicleId);
            $auction->setDeliverCarStatus($deliverCarStatus);
            $auction->setPayment($payment);
            $auction->setStartDate($startDate);
            $auction->setSoldDate($soldDate);
            $auction->setCreateDate($createDate);
            $auction->setPaymentDate($paymentDate);
        }
        return $auction;
    }
    //落札者IDによる検索。
    public function findByUserId(int $userId): ?Auction{
        $sql = "SELECT * FROM auctions WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":user_id", $userId, PDO::PARAM_INT);
        $result = $stmt->execute();
        $auction = null;
        if($result && $row = $stmt->fetch()){
            $id = $row["id"];
            $currentPrices = $row["current_prices"];
            $soldPrice = $row["sold_price"];
            $auctionStatus = $row["auction_status"];
            $userId = $row["user_id"];
            $vehicleId = $row["vehicle_id"];
            $deliverCarStatus = $row["deliver_car_status"];
            $payment = $row["payment"];
            $startDate = $row["start_date"];
            $soldDate = $row["sold_date"];
            $createDate = $row["create_date"];
            $paymentDate = $row["payment_date"];
            $auction = new Auction();
            $auction->setId($id);
            $auction->setCurrentPrice($currentPrices);
            $auction->setSoldPrice($soldPrice);
            $auction->setAuctionStatus($auctionStatus);
            $auction->setUserId($userId);
            $auction->setVehicleId($vehicleId);
            $auction->setDeliverCarStatus($deliverCarStatus);
            $auction->setPayment($payment);
            $auction->setStartDate($startDate);
            $auction->setSoldDate($soldDate);
            $auction->setCreateDate($createDate);
            $auction->setPaymentDate($paymentDate);
        }
        return $auction;
    }

}