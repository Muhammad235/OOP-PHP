<?php


include "autoloader.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   
    //the person class has being accessed from the country page
    $person1 = new Person();

    $person1->name = 'Muhammad';
    echo $person1->name;

    echo '<br>';

    $person1->set_age(31);
    echo $person1->get_age();

   ?>
</body>
</html>