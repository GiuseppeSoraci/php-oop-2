<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/user.php';
require_once __DIR__ . '/computer.php';
require_once __DIR__ . '/smartphone.php';

// Products

$apple_imac = new Computer('Apple', 'iMac', 2021, 1949, '512GB¹, Display Retina 4.5K da 24"² 8GB Ram');
$samsung_smartphone = new Smartphone('Samsung', 'S11', 2020, 929, '5000mAh, 8GB ram, 256GB storage, 5G Dual SIM, 108MP camera');

// User

$user = new User('Lorenzo', 'Duzioni', 'loreduzio@gmail.com', 'p4s5w0rD');

// User products

$user->addProduct($apple_imac);
$user->addProduct($samsung_smartphone);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Cart</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- Body -->

<body>
    <main>
        <h1>Order Summary</h1>

        <?php foreach ($user->getProducts() as $product) { ?>
            <div class="container">
                <ul>
                    <li><b>Brand: </b><?php echo $product->brand ?></li>
                    <li><b>Model: </b><?php echo $product->model ?></li>
                    <li><b>Price: </b><?php echo $product->price ?> $</li>
                </ul>
            </div>
        <?php } ?>
    </main>