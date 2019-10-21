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
        try {
            $controller = new ManagerController();
            return $controller->show();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    });


//          -----Методы работы с тикетами-----
//


    $router->with("/tickets",function () use ($router) {

        $controller = new TicketsController();

        // Отмена ордера, пришедшего от заказчика
        $router->get("/cancel_order/[i:id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                return $controller->moveOrder($request->param("id"), 2);

            });

        // Назначать заказ (id) исполнителю (employee_id)
        $router->get("/appoint_order/[i:id]/[i:employee_id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                return $controller->moveOrder($request->param("id"), 6, $request->param("employee_id"));

            });

        $router->post("/appoint_order/re/?",
            function (Request $request, Response $response)
            {
                $response->redirect(Helpers::url("appoint_order", "re", $request->param("id"), $request->param("employee_id")))->send();
        });

        // Отклонение работы исполнителя
        $router->get("/cancel_work/[i:id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                return $controller->moveOrder($request->param("id"), 3);

            });

        // Завершить заказ
        $router->get("/complete/[i:id]/?",
            function (Request $request, Response $response) use ($controller) {

                // Auth::middleware($response);

                return $controller->moveOrder($request->param("id"), 5);

            });

    });

});