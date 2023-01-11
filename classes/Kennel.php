<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/traits/MaterialItem.php";
require_once __DIR__ . "/traits/BrandItem.php";

class Kennel extends Product
{
    use MaterialItem, BrandItem;

    private $shape;

    public function setShape($shape)
    {
        $this->shape = $shape;
    }
    public function getShape()
    {
        return $this->shape;
    }
}
