<?php

namespace Facade;

class ShippingFee implements CalculableInterface
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }
    
    public function calculate()
    {
        // Anggap saja ini proses yang rumit dan panjang
    }
}
