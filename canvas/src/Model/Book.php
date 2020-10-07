<?php

namespace App\Model;

class Book {

    private $_id;
    private $_label;
    private $_isbn;
    private $_category;

    public function __construct($id, $label, $isbn, $category) {
        $this->_id = $id;
        $this->_label = $label;
        $this->_isbn = $isbn;
        $this->_category = $category;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->_label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->_label = $label;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->_isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->_isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->_category = $category;
    }



}