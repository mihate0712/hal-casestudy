<?php
namespace App\Entity;

/**
 * 車両エンティティクラス
 */
class Vehicle {
    /**
     * 車両ID
     */
    private ?int $id = null;
    /**
     * 車両名
     */
    private ?string $vehicleName = "";
    /**
     * 仕入れ価格
     */
    private ?int $buyingPrice = null;
    /**
     * 年式
     */
    private ?int $modelYear = null;
    /**
     * 走行距離
     */
    private ?string $mileage = "";
    /**
     * 排気量
     */
    private ?string $engineDisplacement = "";
    /**
     * 車検日
     */
    private ?string $inspectionDate = "";
    /**
     * 外装色
     */
    private ?string $exteriorColor = "";
    /**
     * 内装色
     */
    private ?string $interiorColor = "";
    /**
     * カラーNo
     */
    private ?string $colorCode = "";
    /**
     * 車体番号
     */
    private ?string $vehicleIdentificationNumber = "";
    /**
     * 評価点
     */
    private ?string $score = "";
    /**
     * 新車保証書
     */
    private ?int $warrantyDocument = null;
    /**
     * 取扱説明書
     */
    private ?int $manual = null;
    /**
     * 燃料区分
     */
    private ?string $fuel = "";
    /**
     * MT,AT判定
     */
    private ?string $carTypeId = "";
    /**
     * エアコン
     */
    private ?string $airConditioning = "";
    /**
     * シフトレバー
     */
    private ?string $shiftLever = "";
    /**
     * 車の所在地
     */
    private ?string $location = "";
    /**
     * 検査済みか判定フラグ
     */
    private ?int $inspection = null;
    /**
     * メーカー
     */
    private ?string $maker = "";
    /**
     * 車両区分
     */
    private ?string $carModel = "";
    /**
     * 備考
     */
    private ?string $remarks = "";
    /**
     * オークション参加フラグ
     */
    private ?int $auctionJoin = null;
<<<<<<< HEAD
=======
    /**
     * 画像パス
     */
    private ?string $imagePass = "";
>>>>>>> 81afd6526d1b6c956f6781b02a8bd8acb153d454

    /**
     * アクセサメソッド
     */

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of vehicleName
     *
     * @return ?string
     */
    public function getVehicleName(): ?string
    {
        return $this->vehicleName;
    }

    /**
     * Set the value of vehicleName
     *
     * @param ?string $vehicleName
     *
     * @return self
     */
    public function setVehicleName(?string $vehicleName): self
    {
        $this->vehicleName = $vehicleName;

        return $this;
    }

    /**
     * Get the value of buyingPrice
     *
     * @return ?int
     */
    public function getBuyingPrice(): ?int
    {
        return $this->buyingPrice;
    }

    /**
     * Set the value of buyingPrice
     *
     * @param ?int $buyingPrice
     *
     * @return self
     */
    public function setBuyingPrice(?int $buyingPrice): self
    {
        $this->buyingPrice = $buyingPrice;

        return $this;
    }

    /**
     * Get the value of modelYear
     *
     * @return ?int
     */
    public function getModelYear(): ?int
    {
        return $this->modelYear;
    }

    /**
     * Set the value of modelYear
     *
     * @param ?int $modelYear
     *
     * @return self
     */
    public function setModelYear(?int $modelYear): self
    {
        $this->modelYear = $modelYear;

        return $this;
    }

    /**
     * Get the value of mileage
     *
     * @return ?string
     */
    public function getMileage(): ?string
    {
        return $this->mileage;
    }

    /**
     * Set the value of mileage
     *
     * @param ?string $mileage
     *
     * @return self
     */
    public function setMileage(?string $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * Get the value of engineDisplacement
     *
     * @return ?string
     */
    public function getEngineDisplacement(): ?string
    {
        return $this->engineDisplacement;
    }

    /**
     * Set the value of engineDisplacement
     *
     * @param ?string $engineDisplacement
     *
     * @return self
     */
    public function setEngineDisplacement(?string $engineDisplacement): self
    {
        $this->engineDisplacement = $engineDisplacement;

        return $this;
    }

    /**
     * Get the value of inspectionDate
     *
     * @return ?string
     */
    public function getInspectionDate(): ?string
    {
        return $this->inspectionDate;
    }

    /**
     * Set the value of inspectionDate
     *
     * @param ?string $inspectionDate
     *
     * @return self
     */
    public function setInspectionDate(?string $inspectionDate): self
    {
        $this->inspectionDate = $inspectionDate;

        return $this;
    }

    /**
     * Get the value of exteriorColor
     *
     * @return ?string
     */
    public function getExteriorColor(): ?string
    {
        return $this->exteriorColor;
    }

    /**
     * Set the value of exteriorColor
     *
     * @param ?string $exteriorColor
     *
     * @return self
     */
    public function setExteriorColor(?string $exteriorColor): self
    {
        $this->exteriorColor = $exteriorColor;

        return $this;
    }

    /**
     * Get the value of interiorColor
     *
     * @return ?string
     */
    public function getInteriorColor(): ?string
    {
        return $this->interiorColor;
    }

    /**
     * Set the value of interiorColor
     *
     * @param ?string $interiorColor
     *
     * @return self
     */
    public function setInteriorColor(?string $interiorColor): self
    {
        $this->interiorColor = $interiorColor;

        return $this;
    }

    /**
     * Get the value of colorCode
     *
     * @return ?string
     */
    public function getColorCode(): ?string
    {
        return $this->colorCode;
    }

    /**
     * Set the value of colorCode
     *
     * @param ?string $colorCode
     *
     * @return self
     */
    public function setColorCode(?string $colorCode): self
    {
        $this->colorCode = $colorCode;

        return $this;
    }

    /**
     * Get the value of vehicleIdentificationNumber
     *
     * @return ?string
     */
    public function getVehicleIdentificationNumber(): ?string
    {
        return $this->vehicleIdentificationNumber;
    }

    /**
     * Set the value of vehicleIdentificationNumber
     *
     * @param ?string $vehicleIdentificationNumber
     *
     * @return self
     */
    public function setVehicleIdentificationNumber(?string $vehicleIdentificationNumber): self
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;

        return $this;
    }

    /**
     * Get the value of score
     *
     * @return ?string
     */
    public function getScore(): ?string
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param ?string $score
     *
     * @return self
     */
    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get the value of warrantyDocument
     *
     * @return ?int
     */
    public function getWarrantyDocument(): ?int
    {
        return $this->warrantyDocument;
    }

    /**
     * Set the value of warrantyDocument
     *
     * @param ?int $warrantyDocument
     *
     * @return self
     */
    public function setWarrantyDocument(?int $warrantyDocument): self
    {
        $this->warrantyDocument = $warrantyDocument;

        return $this;
    }

    /**
     * Get the value of manual
     *
     * @return ?int
     */
    public function getManual(): ?int
    {
        return $this->manual;
    }

    /**
     * Set the value of manual
     *
     * @param ?int $manual
     *
     * @return self
     */
    public function setManual(?int $manual): self
    {
        $this->manual = $manual;

        return $this;
    }

    /**
     * Get the value of fuel
     *
     * @return ?string
     */
    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    /**
     * Set the value of fuel
     *
     * @param ?string $fuel
     *
     * @return self
     */
    public function setFuel(?string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get the value of carTypeId
     *
     * @return ?string
     */
    public function getCarTypeId(): ?string
    {
        return $this->carTypeId;
    }

    /**
     * Set the value of carTypeId
     *
     * @param ?string $carTypeId
     *
     * @return self
     */
    public function setCarTypeId(?string $carTypeId): self
    {
        $this->carTypeId = $carTypeId;

        return $this;
    }

    /**
     * Get the value of airConditioning
     *
     * @return ?string
     */
    public function getAirConditioning(): ?string
    {
        return $this->airConditioning;
    }

    /**
     * Set the value of airConditioning
     *
     * @param ?string $airConditioning
     *
     * @return self
     */
    public function setAirConditioning(?string $airConditioning): self
    {
        $this->airConditioning = $airConditioning;

        return $this;
    }

    /**
     * Get the value of shiftLever
     *
     * @return ?string
     */
    public function getShiftLever(): ?string
    {
        return $this->shiftLever;
    }

    /**
     * Set the value of shiftLever
     *
     * @param ?string $shiftLever
     *
     * @return self
     */
    public function setShiftLever(?string $shiftLever): self
    {
        $this->shiftLever = $shiftLever;

        return $this;
    }

    /**
     * Get the value of location
     *
     * @return ?string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @param ?string $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of inspection
     *
     * @return ?int
     */
    public function getInspection(): ?int
    {
        return $this->inspection;
    }

    /**
     * Set the value of inspection
     *
     * @param ?int $inspection
     *
     * @return self
     */
    public function setInspection(?int $inspection): self
    {
        $this->inspection = $inspection;

        return $this;
    }

    /**
     * Get the value of maker
     *
     * @return ?string
     */
    public function getMaker(): ?string
    {
        return $this->maker;
    }

    /**
     * Set the value of maker
     *
     * @param ?string $maker
     *
     * @return self
     */
    public function setMaker(?string $maker): self
    {
        $this->maker = $maker;

        return $this;
    }

    /**
     * Get the value of carModel
     *
     * @return ?string
     */
    public function getCarModel(): ?string
    {
        return $this->carModel;
    }

    /**
     * Set the value of carModel
     *
     * @param ?string $carModel
     *
     * @return self
     */
    public function setCarModel(?string $carModel): self
    {
        $this->carModel = $carModel;

        return $this;
    }

    /**
     * Get the value of remarks
     *
     * @return ?string
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * Set the value of remarks
     *
     * @param ?string $remarks
     *
     * @return self
     */
    public function setRemarks(?string $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get the value of auctionJoin
     *
     * @return ?int
     */
    public function getAuctionJoin(): ?int
    {
        return $this->auctionJoin;
    }

    /**
     * Set the value of auctionJoin
     *
     * @param ?int $auctionJoin
     *
     * @return self
     */
    public function setAuctionJoin(?int $auctionJoin): self
    {
        $this->auctionJoin = $auctionJoin;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Get the value of imagePass
     *
     * @return ?string
     */
    public function getImagePass(): ?string
    {
        return $this->imagePass;
    }

    /**
     * Set the value of imagePass
     *
     * @param ?string $imagePass
     *
     * @return self
     */
    public function setImagePass(?string $imagePass): self
    {
        $this->imagePass = $imagePass;

        return $this;
    }
>>>>>>> 81afd6526d1b6c956f6781b02a8bd8acb153d454
}