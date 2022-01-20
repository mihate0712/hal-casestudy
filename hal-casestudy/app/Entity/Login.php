<?php
/**
* PH34 Sample12 マスタテーブル管理Laravel版 Src05/17
*
* @author Shinzo SAITO
*
* ファイル名=User.php
* フォルダ=/scottadminlaravel/app/Entity/
*/
namespace App\Entity;

/**
*ユーザエンティティクラス。
*/
class Login {
/**
* 主キーのid。
*/
private ?int $id = null;
/**
* パスワード。
*/
private ?string $password = "";
/**
* 姓。
*/
private ?string $lastName = "";
/**
* 名。
*/
private ?string $firstName = "";
/**
* メールアドレス。
*/ 
private ?string $email = "";

//以下アクセサメソッド。

public function getId(): ?int {
return $this->id;
}
public function setId(?int $id): void {
$this->id = $id;
}

public function getPassword(): ?string {
return $this->password;
}
public function setPassword(?string $password): void {
$this->password = $password;
}
public function getLastName(): ?string {
return $this->lastName;
}
public function setLastName(?string $lastName): void {
$this->lastName = $lastName;
}
public function getFirstName(): ?string {
return $this->firstName;
}
public function setFirstName(?string $firstName): void {
$this->firstName = $firstName;
}
public function getEmail(): ?string {
return $this->email;
}
public function setEmail(?string $email): void {
$this->email = $email;
}
}