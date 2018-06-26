<?php

require 'vendor/php-sdk/Meli/meli.php';

if (class_exists("Meli")) {
    $meli = new Meli("7005534445752402", "ILdrVyEQzMH0spSBQpF8dp751w22O2Lq");

    $access_token = "APP_USR-7005534445752402-062610-c12f57a8db49bd1fd85fa8f5688356c4-331140478";

    $params = array('access_token' => $access_token);
    $result = $meli->get('/users/me', $params);

    echo "<pre>";
    var_dump($result);
    die;
}