<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/traits/MaterialItem.php";
require_once __DIR__ . "/traits/BrandItem.php";

class Toy extends Product
{
    use MaterialItem, BrandItem;
}
