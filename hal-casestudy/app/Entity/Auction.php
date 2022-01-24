<?php
namespace App\Entity;

class Auction{
    /**
     * ID。
     */
    private ?int $id = null;


    /**
     * 以下アクセサメソッド。
     */
    public function getId(): ?int{
        return $this->id;
    }
    public function setId(?int $id): ?string{
        $this->id = $id;
    }
}