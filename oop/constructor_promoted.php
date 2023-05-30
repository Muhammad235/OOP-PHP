<?php

class Product
{

    public function __construct(public $name = 'T-shirt', public $price = 1000)
    {
        $this->name = $name;
        $this->price = $price;
    }

 
    public function priceAScurrency($divisor = 100, $currencySymbol = '$')
    {
        $priceAScurrency = $this->price / $divisor; 

        return $currencySymbol . $priceAScurrency;
    }
}

$product = new Product(price: 2000);

echo  $product->name . PHP_EOL;
echo $product->price;


?>