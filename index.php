<?php
require 'flight/Flight.php';
require 'api.php';
require 'bot/loader.php';
 
Flight::route('/', function(){
    echo 'Hallo dunia, nama saya derp';
});
Flight::route('GET /chat', 'chat');
Flight::start();
 
?>