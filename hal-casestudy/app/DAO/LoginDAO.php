<?php

/**
 * PH34 Sample12 マスタテーブル管理Laravel版 Src07/17
 *
 * @author Shinzo SAITO
 *
 * ファイル名=UserDAO.php
 * フォルダ=/scottadminlaravel/app/DAO/
 */

namespace App\DAO;

use PDO;
use App\Entity\Login;

/**
 * usersテーブルへのデータ操作クラス。
 */
class LoginDAO
{
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
     * ログインIDによる検索。
     *
     * @param string $loginId ログインID。
     * @return Login 該当するUserオブジェクト。ただし、該当データがない場合はnull。
     */
    public function findByLoginid(string $loginId): ?Login
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":email", $loginId, PDO::PARAM_INT);
        $result = $stmt->execute();
        $login = null;
        if ($result && $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $email = $row["email"];
            $lastName = $row["last_name"];
            $firstName = $row["first_name"];
            $password = $row["password"];
            

            $login = new Login();
            $login->setId($id);
            $login->setEmail($email);
            $login->setLastName($lastName);
            $login->setFirstName($firstName);
            $login->setPassword($password);
        }
        return $login;
    }
}
