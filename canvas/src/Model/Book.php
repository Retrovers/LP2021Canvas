<?php

namespace App\Model;

class Book
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $category;

    public function __construct(int $id, string $label, string $isbn, string $category)
    {
        $this->id = $id;
        $this->label = $label;
        $this->isbn = $isbn;
        $this->category = $category;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setId(?int $id): void
    {
        if (null !== $id) {
            $this->id = $id;
        }
    }

    public function setLabel(?string $label): void
    {
        if (null !== $label) {
            $this->label = $label;
        }
    }

    public function setIsbn(?string $isbn): void
    {
        if (null !== $isbn) {
            $this->isbn = $isbn;
        }
    }

    public function setCategory(?string $category): void
    {
        if (null !== $category) {
            $this->category = $category;
        }
    }
}
