<?php

namespace Facade;

class OrderFacade
{
    private $order;

    private $discount;

    private $adminFee;

    private $shippingFee;

    public function __construct()
    {
        $this->order = new Order();
        $this->discount = new Discount();
        $this->adminFee = new AdminFee();
        $this->shippingFee = new ShippingFee();
    }

    public function setProduct(Product $product)
    {
        $this->order->setProduct($product);
        $this->discount->setProduct($product);
        $this->adminFee->setProduct($product);
        $this->shippingFee->setProduct($product);
    }

    public function createOrder()
    {
        //Ceritanya ada pengecekan ini dan itu

        $this->order->calculate();
        $this->discount->calculate();
        $this->adminFee->calculate();
        $this->shippingFee->calculate();

        //Kompleks banget lah pokoknya
    }
}
