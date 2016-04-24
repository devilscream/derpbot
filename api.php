<?php
use \derpbot\database;
function chat() 
{
    $message = $_GET['message'];
    $ask = database::ask();
    $answer = database::answer();
    for ($i = 0; $i < count($ask); ++$i) 
    {
        
        if(preg_match($ask[$i],$message)) 
        {
        Flight::json(array(
            "success" => 1,
            "message"=>$answer[$i]
        ));
        }
    }
}
?>