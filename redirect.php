<?php

require 'vendor/php-sdk/Meli/meli.php';

if(class_exists("Meli")) {
    $meli = new Meli("7005534445752402", "ILdrVyEQzMH0spSBQpF8dp751w22O2Lq");
    
    $redirectUrl = $meli->getAuthUrl("https://maps/goondthost.com/marketplaces", Meli::$AUTH_URL['MLB']);
    $user = $meli->authorize($code, $redirectUrl);
    
    echo "<pre>";
    var_dump($result);
    die;
}