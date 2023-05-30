<?php


class Product
{
    // properties 
    public $name = 'soap';
    public $price;
 
    public function priceAScurrency($currencySymbol = '$')
    {
        $priceAScurrency = $this->price / 100; 

        return $currencySymbol . $priceAScurrency;
    }
}

$product = new Product();

$product->price = 1000;

//this will take the default 
//$conversion = $product->priceAScurrency();

//this will override the default 
$conversion = $product->priceAScurrency('#');

echo $conversion;

?>