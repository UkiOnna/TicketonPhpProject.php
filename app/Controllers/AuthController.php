<?php

namespace Controllers;


use Core\Abstracts\Controller;
use Models\Auth;
use Models\Flashes;

class AuthController extends Controller
{
    function loginShow()
    {
        return $this->render("auth/login", [
            "title" => "Login",
            "flashes" => Flashes::get()
        ]);
    }

    function loginMake($username, $password)
    {
        return Auth::login($username, $password);
    }

    function registrationShow()
    {
        return $this->render("auth/registration", [
            "title" => "Registration",
            "flashes" => Flashes::get()
        ]);
    }

    function registrationMake($username, $password, $name)
    {
        return Auth::registration($username, $password, $name);
    }
}
