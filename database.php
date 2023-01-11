<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/classes/Kennel.php";
require_once __DIR__ . "/classes/Category.php";


// Categories
$dog = new Category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");

// Products
$food = new Food("Croccantini", "https://arcaplanet.vtexassets.com/arquivos/ids/270782/Monge-All-Breeds-Adult-Agnello-Riso-e-Patate-2.5Kg.jpg?v=1759851389", 16.99, $dog);
$food->setFlavour("Pollo");
$food->setExpiration("11/01/2024");

$toy = new Toy("Tiragraffi Federico", "https://arcaplanet.vtexassets.com/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=1759729540", 169.00, $cat);
$toy->setBrand("Trixie");

$kennel = new Kennel("Cuccia Lux", "https://arcaplanet.vtexassets.com/arquivos/ids/272213/mondial-pet-canile.jpg?v=1757378496", 139.99, $dog);
$kennel->setBrand("Mondial Pet");
$kennel->setShape("Rettangolare");
$kennel->setMaterial("Legno coibentato");


$products = [
    $food,
    $toy,
    $kennel
];
