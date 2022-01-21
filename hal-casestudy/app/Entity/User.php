<?php
namespace App\Entity;

/**
 *ユーザエンティティクラス。
 */
class User
{
    /**
     * 主キーのid。
     */
    // private ?int $id = null;
    /**
     * ユーザーID。
     */
    private ?string $user_id = "";
    /**
     * ニックネーム。
     */
    private ?string $screen_name = "";
    /**
     * 姓。
     */
    private ?string $first_name = "";
    /**
     * 名。
     */
    private ?string $last_name = "";
    /**
     * 姓（カナ）。
     */
    private ?string $first_name_kana = "";
    /**
     * 名（カナ）。
     */
    private ?string $last_name_kana = "";
    /**
     * 性別。
     */
    private ?string $gender = "";
    /**
     * メールアドレス。
     */
    private ?string $email = "";
    /**
     * 電話番号。
     */
    private ?string $phone_number = "";
    /**
     * 職業。
     */
    private ?string $job = "";
    /**
     * 住所。
     */
    private ?string $prefectures = "";
    /**
     * 市区町村。
     */
    private ?string $city = "";
    /**
     * 番地。
     */
    private ?string $block = "";
    /**
     * 建物名・部屋番号。
     */
    private ?string $building = "";
    /**
     * 会社名。
     */
    private ?string $company_name = "";
    /**
     * パスワード。
     */
    private ?string $password = "";






    //以下アクセサメソッド。

    // public function getId(): ?int {
    // return $this->id;
    // }
    // public function setId(?int $id): void {
    // $this->id = $id;
    // }
    public function getUserId(): ?string
    {
        return $this->user_id;
    }
    public function setUserId(?string $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getScreenName(): ?string
    {
        return $this->screen_name;
    }
    public function setScreenName(?string $screen_name): void
    {
        $this->screen_name = $screen_name;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }
    public function setFirstName(?string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }
    public function setLastName(?string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function getFirstNameKana(): ?string
    {
        return $this->first_name_kana;
    }
    public function setFirstNameKana(?string $first_name_kana): void
    {
        $this->first_name_kana = $first_name_kana;
    }

    public function getLastNameKana(): ?string
    {
        return $this->last_name_kana;
    }
    public function setLastNameKana(?string $last_name_kana): void
    {
        $this->last_name_kana = $last_name_kana;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }
    public function setPhoneNumber(?string $phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }
    public function setJob(?string $job): void
    {
        $this->job = $job;
    }

    public function getPrefectures(): ?string
    {
        return $this->prefectures;
    }
    public function setPrefectures(?string $prefectures): void
    {
        $this->prefectures = $prefectures;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getBlock(): ?string
    {
        return $this->block;
    }
    public function setBlock(?string $block): void
    {
        $this->block = $block;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }
    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }
    public function setCompanyName(?string $company_name): void
    {
        $this->company_name = $company_name;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}
