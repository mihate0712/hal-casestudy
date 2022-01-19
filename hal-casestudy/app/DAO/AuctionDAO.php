<?php
namespace App\DAO;

use PDO;
use App\Entity\Auction;

/**
 * auctionsテーブルへのデータ操作クラス
 */
class AuctionDAO{
    private PDO $db;
    public function __construct(PDO $db){
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    /**
     * ID検索
     */
    public function findById(int $id): ?Auction{
        $sql = "SELECT * FROM auctions WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
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
            $auction->setCurrentPrices($currentPrices);
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

    /**
     * 現在価格昇順検索
     */
    
    /**
     * 現在価格降順検索
     */

    /**
     * 落札価格昇順検索
     */

    /**
     * 落札価格降順検索
     */
    
    /**
     * 落札者ID検索
     */
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
            $auction->setCurrentPrices($currentPrices);
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

    /**
     * 車両ID検索
     */
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
            $auction->setCurrentPrices($currentPrices);
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

    /**
     * 全件検索
     */
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
            $auction->setCurrentPrices($currentPrices);
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

}
