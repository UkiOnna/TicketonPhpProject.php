<?php
namespace Models;


class Password
{
    private function __construct()
    {
    }
    static function hash($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
    static function verify($password, $hash){
        return password_verify($password, $hash);
    }
}