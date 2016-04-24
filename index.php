<?php
require 'flight/Flight.php';
require 'bot/loader.php';
require 'api.php';
 
Flight::route('/', function(){
    echo 'Hallo dunia, nama saya derp';
});
Flight::route('GET /chat', 'chat');
Flight::start();
 
?>