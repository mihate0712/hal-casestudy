<?php
namespace App\Entity;

class Option{
    /**
     * ID。
     */
    private ?int $id = null;
    /**
     * 現在価格
     */
    private ?string $optionName = null;
    

    /**
     * 以下アクセサメソッド。
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
     * Get the value of optionName
     *
     * @return ?string
     */
    public function getOptionName(): ?string
    {
        return $this->optionName;
    }

    /**
     * Set the value of optionName
     *
     * @param ?string $optionName
     *
     * @return self
     */
    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;

        return $this;
    }
}