<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/classes/Kennel.php";
require_once __DIR__ . "/classes/Category.php";


// Category
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- /bootstrap CDN -->
    <!-- font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /font-awesome CDN -->
    <title>Php OOP 2 - Pet store</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Pet store</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="fs-2 text-center">
                            <?php echo $product->getCategory()->getIcon(); ?>
                        </div>
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <!-- marca prodotto-->
                            <?php if (method_exists($product, 'getBrand')) { ?>
                                <p class="card-text">Marca: <?php echo $product->getBrand(); ?></p>
                            <?php } ?>
                            <!-- /marca prodotto-->
                            <!-- gusto prodotto-->
                            <?php if (method_exists($product, 'getFlavour')) { ?>
                                <p class="card-text">Gusto: <?php echo $product->getFlavour(); ?></p>
                            <?php } ?>
                            <!-- /gusto prodotto-->
                            <!-- scadenza prodotto-->
                            <?php if (method_exists($product, 'getExpiration')) { ?>
                                <p class="card-text">Scadenza: <?php echo $product->getExpiration(); ?></p>
                            <?php } ?>
                            <!-- /scadenza prodotto-->
                            <!-- forma prodotto-->
                            <?php if (method_exists($product, 'getShape')) { ?>
                                <p class="card-text">Forma: <?php echo $product->getShape(); ?></p>
                            <?php } ?>
                            <!-- /forma prodotto-->
                            <!-- materiale prodotto-->
                            <?php if (method_exists($product, 'getMaterial') && $product->getMaterial() != "") { ?>
                                <p class="card-text">Materiale: <?php echo $product->getMaterial(); ?></p>
                            <?php } ?>
                            <!-- /materiale prodotto-->
                            <!-- prezzo prodotto-->
                            <p class="card-text">Prezzo: <?php echo number_format($product->getPrice(), 2); ?>€</p>
                            <!-- /prezzo prodotto-->
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>