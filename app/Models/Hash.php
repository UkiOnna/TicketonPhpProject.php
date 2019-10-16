<?php
namespace Models;


use Klein\Request;
use Klein\Response;
use Models\Tables\Users;

class Hash
{
    private function __construct()
    {
    }
    static function generate(){
        return md5(hexdec(uniqid()));
    }
    static function token(){
        return self::generate();
    }
    static function checkToken(Request $request, Response $response){
        $users = new Users();
        if (!$users->has([
            "token" => $request->param("token")
        ])) {
            $response->code(403)->send();
            exit();
        }
    }
}