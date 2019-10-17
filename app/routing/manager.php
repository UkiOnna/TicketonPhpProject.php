<?php
//Created by Lev


use Controllers\Manager\ManagerController;
use Controllers\Manager\TicketsController;
use Core\Helpers;
use Klein\Request;
use Klein\Response;

$router->with("/manager", function () use ($router) {

    $router->get("/?", function (Request $request, Response $response) {
        return $response->redirect(Helpers::url("manager", "dashboard"))->send();
    });

    $router->get("/dashboard/?", function (Request $request, Response $response) {

        // Auth::middleware($response);

        $controller = new ManagerController();
        return $controller->show();

    });


//          -----Методы для взаимодействия с тикетами-----
//


    $router->with("/tickets",function () use ($router) {

        $controller = new TicketsController();

        $router->get("/update/[i:id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                return $controller->update($request->param("id"));

            });

        $router->post("/create/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                $controller->postCreate($request);
                return $response->redirect(Helpers::url("admin"))->send();

            });

        $router->post("/update/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                $controller->postUpdate($request);
                return $response->redirect(Helpers::url("admin"))->send();

            });

        $router->get("/delete/[i:id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);
                $controller->postDelete($request);
                return $response->redirect(Helpers::url("admin"))->send();

            });

    });


//
//    $router->with("/categories",function () use ($router) {
//
//        $controller = new CategoriesController();
//
//        $router->get("/?", function () use ($controller) {
//            return $controller->show();
//        });
//
//        $router->get("/create/?",
//            function (Request $request, Response $response) use ($controller) {
//                Auth::middleware($response);
//                return $controller->create();
//            });
//
//        $router->get("/update/[i:id]/?",
//            function (Request $request, Response $response) use ($controller) {
//                Auth::middleware($response);
//                return $controller->update($request->param("id"));
//            });
//
//        $router->post("/create/?",
//            function (Request $request, Response $response) use ($controller) {
//
//                Auth::middleware($response);
//
//                $controller->postCreate($request);
//                return $response->redirect(Helpers::url("admin", "categories"))->send();
//
//            });
//
//        $router->post("/update/?",
//            function (Request $request, Response $response) use ($controller) {
//
//                Auth::middleware($response);
//                $controller->postUpdate($request);
//                return $response->redirect(Helpers::url("admin", "categories"))->send();
//
//            });
//
//        $router->get("/delete/[i:id]/?",
//            function (Request $request, Response $response) use ($controller) {
//
//                Auth::middleware($response);
//                $controller->postDelete($request);
//                return $response->redirect(Helpers::url("admin", "categories"))->send();
//
//            });
//
//    });

});