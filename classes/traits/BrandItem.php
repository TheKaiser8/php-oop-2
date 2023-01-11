<?php

trait BrandItem
{
    protected $brand;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }
}
