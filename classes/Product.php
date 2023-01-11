<?php

class Product
{
    private $name;
    private $image;
    private $price;

    public function __construct(string $_name, string $_image, float $_price)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
