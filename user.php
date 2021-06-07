<?php

class User
{

    public $name;
    public $lastname;
    public $age;
    public $email;
    private $password;
    private $cart = [];

    public function __construct($_name, $_surname, $_email, $_password)
    {
        $this->name = $_name;
        $this->lastname = $_surname;
        $this->email = $_email;
        $this->password = $_password;
    }

    // Add Products

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getPrintableProducts()
    {
        $printable_array = [];

        foreach ($this->products as $product) {
            $printable_array[] = $product->getInfoData();
        }

        return $printable_array;
    }
}
