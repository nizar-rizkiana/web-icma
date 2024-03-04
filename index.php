<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/yichicma";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "index.html";
            break;
        case $me.'/ppdb' :
            require "ppdb.html";
            break;
        case $me.'/sdit-icma' :
            require "maintenance.html";
            break;
        case $me.'/tkit-icma' :
            require "maintenance.html";
            break;
        default:
            http_response_code(404);
            require "maintenance.html";
            break;
    }