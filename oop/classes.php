<?php 

class Product
{
    // properties 
    public $name = 'soap';
    public $price;

    public function priceAScurrency()
    {
        $priceAScurrency = $this->price / 100; 

        return $priceAScurrency;
    }
}

$product1 = new Product();
$product1->price = 550;

$product2 = new Product();
$product2->price = 750;

$currencyValue = $product2->priceAScurrency();

var_dump($currencyValue) . PHP_EOL;
echo $currencyValue;





?>;