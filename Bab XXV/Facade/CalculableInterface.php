<?php

namespace Facade;

interface CalculableInterface
{
    public function setProduct(Product $product);

    public function calculate();
}
