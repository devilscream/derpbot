<?php
namespace derpbot;
class database
{
    function ask() 
    {
        return array(
            "/hai/", 
            "/hello/",
            "/apa kabar?/",
            "/bantu/",
            "/nama/");
    }
    
    function answer()
    {
        return array(
            "hai juga", 
            "hello",
            "baik, kamu?",
            "ada yang bisa aku bantu?",
            "nama aku derp");
    }
}
?>
