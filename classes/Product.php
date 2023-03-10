<?php
require_once __DIR__ . "/traits/NameItem.php";

class Product
{
    use NameItem;

    private $image;
    private $price;
    private $category;

    public function __construct(string $_name, string $_image, float $_price, Category $_category)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
