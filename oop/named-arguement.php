<?php

class Product
{
    // properties 
    public $name = 'soap';
    public $price = 10000;
 
    public function priceAScurrency($divisor = 100, $currencySymbol = '$')
    {
        $priceAScurrency = $this->price / $divisor; 

        return $currencySymbol . $priceAScurrency;
    }
}

$product = new Product();

$conversion = $product->priceAScurrency(currencySymbol: '#');

echo $conversion;

?>