<?php

require __DIR__.'/vendor/autoload.php';

use Facade\Product;
use Facade\OrderFacade;

$product = new Product();
$product->setQty(1);
$product->setName('Facade Product');
$product->setPrice(10000);

$facade = new OrderFacade();
$facade->setProduct($product);
$facade->createOrder();
