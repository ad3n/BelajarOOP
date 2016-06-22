<?php

require __DIR__.'/vendor/autoload.php';

use Facade\Product;
use Facade\AdminFee;
use Facade\Discount;
use Facade\Order;
use Facade\ShippingFee;

$product = new Product();
$product->setQty(1);
$product->setName('Facade Product');
$product->setPrice(10000);

$order = new Order();
$order->setProduct($product);
$order->calculate();

$discount = new Discount();
$discount->setProduct($product);
$discount->calculate();

$adminFee = new AdminFee();
$adminFee->setProduct($product);
$adminFee->calculate();

$shippingFee = new ShippingFee();
$shippingFee->setProduct($product);
$shippingFee->calculate();


