<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product
{
    private $brand;
    private $material;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
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
