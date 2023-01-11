<?php
require_once __DIR__ . "/Product.php";

class Kennel extends Product
{
    private $brand;
    private $shape;
    private $material;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function setShape($shape)
    {
        $this->shape = $shape;
    }
    public function getShape()
    {
        return $this->shape;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
