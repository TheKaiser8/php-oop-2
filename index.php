<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";


$food = new Food("Croccantini", "https://arcaplanet.vtexassets.com/arquivos/ids/270782/Monge-All-Breeds-Adult-Agnello-Riso-e-Patate-2.5Kg.jpg?v=1759851389", 16.99);
$food->setFlavour("Pollo");
$food->setExpiration("11/01/2024");

$toy = new Toy("Gioco Cane Frisbee", "https://arcaplanet.vtexassets.com/arquivos/ids/277247/AD043-F.jfif.jpg?v=1758323126", 10.49);
$toy->setBrand("Camon");
$toy->setMaterial("Plastica");

$products = [
    $food,
    $toy
];

var_dump($products);
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
    <title>Php OOP 2 - Pet store</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Pet store</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?>€</p>
                            <?php if (method_exists($product, 'getExpiration')) { ?>
                                <p class="card-text">Scadenza: <?php echo $product->getExpiration(); ?></p>
                            <?php } ?>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>