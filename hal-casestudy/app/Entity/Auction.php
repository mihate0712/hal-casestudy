<?php
namespace App\Entity;

class Auction{
    /**
     * ID。
     */
    private ?int $id = null;
    /**
     * 現在価格
     */
    private ?int $currentPrice = null;
    /**
     * 落札価格
     */
    private ?int $soldPrice = null;
    /**
     * オークションの状態
     */
    private ?int $auctionStatus = null;
    /**
     * 落札者ID
     */
    private ?int $userId = null;
    /**
     * 車両ID
     */
    private ?int $vehicleId = null;
    /**
     * 納品状態
     */
    private ?int $deliverCarStatus = null;
    /**
     * 代金回収ステータス
     */
    private ?int $payment = null;
    /**
     * 開始日時
     */
    private ?string $startDate = "";
    /**
     * 売れた日時
     */
    private ?string $soldDate = "";
    /**
     * オークション登録日時
     */
    private ?string $createDate = "";
    /**
     * 支払期日
     */
    private ?string $paymentDate = "";


    /**
     * 以下アクセサメソッド。
     */
    public function getId(): ?int{
        return $this->id;
    }
    public function setId(?int $id): void{
        $this->id = $id;
    }
    public function getCurrentPrice(): ?int{
        return $this->currentPrice;
    }
    public function setCurrentPrice(?int $currentPrice): void{
        $this->currentPrice = $currentPrice;
    }
    public function getSoldPrice(): ?int{
        return $this->soldPrice;
    }
    public function setSoldPrice(?int $soldPrice): void{
        $this->soldPrice = $soldPrice;
    }
    public function getAuctionStatus(): ?int{
        return $this->auctionStatus;
    }
    public function setAuctionStatus(?int $auctionStatus): void{
        $this->auctionStatus = $auctionStatus;
    }
    public function getUserId(): ?int{
        return $this->userId;
    }
    public function setUserId(?int $userId): void{
        $this->userId = $userId;
    }
    public function getVehicleId(): ?int{
        return $this->vehicleId;
    }
    public function setVehicleId(?int $vehicleId): void{
        $this->vehicleId = $vehicleId;
    }
    public function getDeliverCarStatus(): ?int{
        return $this->deliverCarStatus;
    }
    public function setDeliverCarStatus(?int $deliverCarStatus): void{
        $this->deliverCarStatus = $deliverCarStatus;
    }
    public function getPayment(): ?int{
        return $this->payment;
    }
    public function setPayment(?int $payment): void{
        $this->payment = $payment;
    }
    public function getStartDate(): ?string{
        return $this->startDate;
    }
    public function setStartDate(?string $startDate): void{
        $this->startDate = $startDate;
    }
    public function getSoldDate(): ?string{
        return $this->soldDate;
    }
    public function setSoldDate(?string $soldDate): void{
        $this->soldDate = $soldDate;
    }
    public function getCreateDate(): ?string{
        return $this->createDate;
    }
    public function setCreateDate(?string $createDate): void{
        $this->createDate = $createDate;
    }
    public function getPaymentDate(): ?string{
        return $this->paymentDate;
    }
    public function setPaymentDate(?string $paymentDate): void{
        $this->paymentDate = $paymentDate;
    }
}