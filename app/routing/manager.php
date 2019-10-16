<?php

use Controllers\TicketController;
use Controllers\IndexController;
use Controllers\Manager\ManagerController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Tables\Users;


$router = new Klein();

$router->get("/manager/?", function () {
    $controller=new ManagerController();
    $controller->show();
});



$router->with("/posts",function () use ($router) {

//    $controller = new PostsController();
//
//    $router->get("/create/?",
//        function (Request $request, Response $response) use ($controller) {
//            Auth::middleware($response);
//            return $controller->create();
//        });
//
//    $router->get("/update/[i:id]/?",
//        function (Request $request, Response $response) use ($controller) {
//            Auth::middleware($response);
//            return $controller->update($request->param("id"));
//        });
//
//    $router->post("/create/?",
//        function (Request $request, Response $response) use ($controller) {
//
//            Auth::middleware($response);
//
//            $controller->postCreate($request);
//            return $response->redirect(Helpers::url("admin"))->send();
//
//        });
//
//    $router->post("/update/?",
//        function (Request $request, Response $response) use ($controller) {
//
//            Auth::middleware($response);
//            $controller->postUpdate($request);
//            return $response->redirect(Helpers::url("admin"))->send();
//
//        });
//
//    $router->get("/delete/[i:id]/?",
//        function (Request $request, Response $response) use ($controller) {
//
//            Auth::middleware($response);
//            $controller->postDelete($request);
//            return $response->redirect(Helpers::url("admin"))->send();
//
//        });

});


$router->dispatch();