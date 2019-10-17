<?php

use Controllers\AuthController;
use Core\Helpers;
use Klein\Request;
use Klein\Response;
use Models\Auth;

$router->with("/auth", function () use ($router) {
    $router->with("/login", function () use ($router) {
        $controller = new AuthController();
        $router->get("/?", function (Request $request, Response $response) use ($controller) {

            if (Auth::isLogin()) {
                $response->redirect(Helpers::url("index"))->send();
                exit();
            }

            return $controller->loginShow();

        });
        $router->post("/?", function (Request $request, Response $response) use ($controller) {

            if (Auth::isLogin()) {
                $response->redirect(Helpers::url("index"))->send();
                exit();
            }

            $username = $request->param("username");
            $password = $request->param("password");

            if ($controller->loginMake($username, $password)) {
                $url = "/asdasdas";
            } else {
                $url = "/auth/registration";
            }

            return $response->redirect($url)->send();
        });
    });
    $router->with("/registration", function () use ($router) {
        $controller = new AuthController();
        $router->get("/?", function (Request $request, Response $response) use ($controller) {
            if (Auth::isLogin()) {
                $response->redirect(Helpers::url("index"))->send();
                exit();
            }
            return $controller->registrationShow();
        });
        $router->post("/?", function (Request $request, Response $response) use ($controller) {
            if (Auth::isLogin()) {
                $response->redirect(Helpers::url("index"))->send();
                exit();
            }
            $username = $request->param("username");
            $password = $request->param("password");
            $name = $request->param("name");
            if ($controller->registrationMake($username, $password, $name)) {
                $url = Helpers::url("login");
            } else {
                $url = Helpers::url("registration");
            }
            var_dump("leha");
            return $response->redirect($url)->send();
        });
    });
    $router->get("/logout/?", function (Request $request, Response $response) {
        Auth::logout();
        return $response->redirect(Helpers::url("login"))->send();
    });
});