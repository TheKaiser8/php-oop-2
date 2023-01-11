<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";

$food = new Food("Croccantini", "https://arcaplanet.vtexassets.com/arquivos/ids/270782/Monge-All-Breeds-Adult-Agnello-Riso-e-Patate-2.5Kg.jpg?v=1759851389", 16.99);
$food->setFlavour("Pollo");
$food->setExpiration("11/01/2024");


var_dump($food);
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
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $food->getImage(); ?>" class="card-img-top" alt="<?php echo $food->getName(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $food->getName(); ?></h5>
                        <p class="card-text">Prezzo: <?php echo $food->getPrice(); ?>€</p>
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>