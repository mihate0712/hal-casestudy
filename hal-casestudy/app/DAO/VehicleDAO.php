<?php
namespace App\DAO;

use PDO;
use App\Entity\Vehicle;

class VehicleDAO {
    /**
     * @var PDO DB接続オブジェクト
     */
    private $db;

    /**
     * コンストラクタ
     *
     * @param PDO $db DB接続オブジェクト
     */
    public function __construct(PDO $db) {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    /**
     * 車両情報情報登録。
     * 
     * @param Vehicle $vehicle 登録情報が格納されたvehicleオブジェクト。
     * @return integer 登録情報の連番主キーの値。登録に失敗した場合は-1。
     */
    public function insert(Vehicle $vehicle): int {
        $sqlInsert = "INSERT INTO vehicles (vehicle_name, buying_price, model_year, mileage, engine_displacement, inspection_date, exterior_color, interior_color, color_code, vehicle_identification_number, score, warranty_document, manual, fuel, car_type_id, air_conditioning, shift_lever, location, inspection, maker, car_model, remarks, auction_join, image_pass) VALUES (:vehicle_name, :buying_price, :model_year, :mileage, :engine_displacement, :inspection_date, :exterior_color, :interior_color, :color_code, :vehicle_identification_number, :score, :warranty_document, :manual, :fuel, :car_type_id, :air_conditioning, :shift_lever, :location, :inspection, :maker, :car_model, :remarks, :, :image_pass)";
        $stmt = $this->db->prepare($sqlInsert);
        $stmt->bindValue(":vehicle_name", $vehicle->getVehicleName(), PDO::PARAM_STR);
        $stmt->bindValue(":buying_price", $vehicle->getBuyingPrice(), PDO::PARAM_INT);
        $stmt->bindValue(":model_year", $vehicle->getModelYear(), PDO::PARAM_INT);
        $stmt->bindValue(":mileage", $vehicle->getMileage(), PDO::PARAM_STR);
        $stmt->bindValue(":engine_displacement", $vehicle->getEngineDisplacement(), PDO::PARAM_STR);
        $stmt->bindValue(":inspection_date", $vehicle->getInspectionDate(), PDO::PARAM_STR);
        $stmt->bindValue(":exterior_color", $vehicle->getExteriorColor(), PDO::PARAM_STR);
        $stmt->bindValue(":interior_color", $vehicle->getInteriorColor(), PDO::PARAM_STR);
        $stmt->bindValue(":color_code", $vehicle->getColorCode(), PDO::PARAM_STR);
        $stmt->bindValue(":vehicle_identification_number", $vehicle->getVehicleIdentificationNumber(), PDO::PARAM_STR);
        $stmt->bindValue(":score", $vehicle->getScore(), PDO::PARAM_STR);
        $stmt->bindValue(":warranty_document", $vehicle->getWarrantyDocument(), PDO::PARAM_INT);
        $stmt->bindValue(":manual", $vehicle->getManual(), PDO::PARAM_INT);
        $stmt->bindValue(":fuel", $vehicle->getFuel(), PDO::PARAM_STR);
        $stmt->bindValue(":car_type_id", $vehicle->getCarTypeId(), PDO::PARAM_STR);
        $stmt->bindValue(":air_conditioning", $vehicle->getAirConditioning(), PDO::PARAM_STR);
        $stmt->bindValue(":shift_lever", $vehicle->getShiftLever(), PDO::PARAM_STR);
        $stmt->bindValue(":location", $vehicle->getLocation(), PDO::PARAM_STR);
        $stmt->bindValue(":inspection", $vehicle->getInspection(), PDO::PARAM_STR);
        $stmt->bindValue(":maker", $vehicle->getMaker(), PDO::PARAM_STR);
        $stmt->bindValue(":car_model", $vehicle->getCarModel(), PDO::PARAM_STR);
        $stmt->bindValue(":remarks", $vehicle->getRemarks(), PDO::PARAM_STR);
        $stmt->bindValue(":auction_join", $vehicle->getAuctionJoin(), PDO::PARAM_INT);
        $stmt->bindValue(":image_pass", $vehicle->getImagePass(), PDO::PARAM_STR);
        $result = $stmt->execute();
        if($result) {
            $vehicleId = $this->db->lastInsertId();
        }
        else {
            $vehicleId = -1;
        }
        return  $vehicleId;
    }

    /**
     * 全車両検索
     */
    public function findAll(): array{
        $sql = "SELECT * FROM vehicles ORDER BY id";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        $carList = [];
        while($row = $stmt->fetch()){
            $id = $row["id"];
            $vehicleName = $row["vehicle_name"];
            $imagePass = $row["image_pass"];
            $vehicle = new Vehicle();
            $vehicle->setId($id);
            $vehicle->setVehicleName($vehicleName);
            $vehicle->setImagePass($imagePass);
            $carList[$id] = $vehicle;
        }
        return $carList;
    }
}
