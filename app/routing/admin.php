<?php
//created by Yernar
use Controllers\Admin\DashboardController;
use Core\Helpers;
use Klein\Request;
use Klein\Response;
use Models\Auth;

$router->with("/admin", function () use ($router) {
    //*****GET***
    $router->get("/?", function (Request $request, Response $response){
        return $response
            ->redirect(Helpers::url("admin", "dashboard"))
            ->send();
    });
    $router->get("/dashboard/?", function (Request $request, Response $response){
//        Auth::middleware($response);
        $controller = new DashboardController();
        return $controller->show();
    });

});