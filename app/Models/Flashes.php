<?php
namespace Models;


class Flashes
{
    private function __construct()
    {
    }
    static function message($message, $type = "info"){
        $_SESSION["flashes"][] = [
            "message" => $message,
            "type" => $type
        ];
    }
    static function get(){
        $flashes = $_SESSION["flashes"];
        unset($_SESSION["flashes"]);
        return $flashes;
    }
}