<?php
use \derpbot\bot;
function chat() 
{
    $message = $_GET['message'];
    bot::auto($message);
}
?>