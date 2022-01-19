<?php
namespace App\DAO;

use PDO;
use App\Entity\User;

/**
 * usersテーブルへのデータ操作クラス。
 */
class UserDAO{
    /**
     * @var PDO DB接続オブジェクト
     */
    private PDO $db;
    /**
     * コンストラクタ
     *
     * @param PDO $db DB接続オブジェクト
     */
    public function __construct(PDO $db)
    {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    /**
     * ユーザー情報登録。
     *
     * @param User $dept 登録情報が格納されたDeptオブジェクト。
     * @return integer 登録情報の連番主キーの値。登録に失敗した場合は-1。
     */
    public function insert(User $user): int
    {
        $sqlInsert = "INSERT INTO users (user_id, job, screen_name, password, last_name, last_name_kana, first_name, first_name_kana, phone_number, email, prefectures, city, block, building, company_name, gender) VALUES (:user_id, :job, :screen_name, :password, :last_name, :last_name_kana, :first_name, :first_name_kana, :phone_number, :email, :prefectures, :city, :block, :building, :company_name, :gender)";
        $stmt = $this->db->prepare($sqlInsert);
        $stmt->bindValue(":user_id", $user->getUserId(), PDO::PARAM_STR);
        $stmt->bindValue(":job", $user->getJob(), PDO::PARAM_STR);
        $stmt->bindValue(":screen_name", $user->getScreenName(), PDO::PARAM_STR);
        $stmt->bindValue(":password", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":last_name", $user->getLastName(), PDO::PARAM_STR);
        $stmt->bindValue(":last_name_kana", $user->getLastNameKana(), PDO::PARAM_STR);
        $stmt->bindValue(":first_name", $user->getFirstName(), PDO::PARAM_STR);
        $stmt->bindValue(":first_name_kana", $user->getFirstNameKana(), PDO::PARAM_STR);
        $stmt->bindValue(":phone_number", $user->getPhoneNumber(), PDO::PARAM_STR);
        $stmt->bindValue(":email", $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(":prefectures", $user->getPrefectures(), PDO::PARAM_STR);
        $stmt->bindValue(":city", $user->getCity(), PDO::PARAM_STR);
        $stmt->bindValue(":block", $user->getBlock(), PDO::PARAM_STR);
        $stmt->bindValue(":building", $user->getBuilding(), PDO::PARAM_STR);
        $stmt->bindValue(":company_name", $user->getCompanyName(), PDO::PARAM_STR);
        $stmt->bindValue(":gender", $user->getGender(), PDO::PARAM_STR);
        $result = $stmt->execute();
        if ($result) {
            $id = $this->db->lastInsertId();
        } else {
            $id = -1;
        }
        return  $id;
    }
}
