<?php
/**
 * Created by PhpStorm.
 * User: ПавловЕ
 * Date: 17.10.2019
 * Time: 19:22
 */

namespace Controllers;


use Core\Abstracts\Controller;
use Models\Auth;

class AuthController extends Controller
{
    function loginShow(){
        return $this->render("auth/login", [
            "title" => "Login"
        ]);
    }

    function loginMake($username, $password){
        return Auth::login($username, $password);
    }

    function registrationShow(){
        return $this->render("auth/registration", [
            "title" => "Registration"
        ]);
    }

    function registrationMake($username, $password, $name){
        return Auth::registration($username, $password, $name);
    }
}