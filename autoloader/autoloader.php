<?php

// By implementing an autoloader, you can avoid manual inclusion of class files throughout your codebase, improving maintainability and reducing the risk of missing or duplicated includes.

spl_autoload_register("Classes");

function Classes($className){
    $path = "classes/";
    $extension = ".php";

    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;

}
