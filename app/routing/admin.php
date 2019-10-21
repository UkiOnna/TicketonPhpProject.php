<?php
//created by Yernar
use Controllers\Admin\DashboardController;
use Controllers\Admin\UsersController;
use Controllers\Admin\TicketsController;
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
});

$router->with("/admin/dashboard", function () use ($router) {

    $router->get("/?", function (Request $request, Response $response){
//        Auth::middleware($response);
        $controller = new DashboardController();
        return $controller->show();
    });
//**************************
    $router->with( "/users", function () use ($router){
        $controller = new UsersController();
        $router->get("/[create:action]?", function (Request $request, Response $response) use ($controller){
//        Auth::middleware($response);
            return $controller->createForm();
        });
        $router->post("/[create:action]?", function (Request $request, Response $response)  use ($controller){
//        Auth::middleware($response);
            $user = ["username"=>$request->param("name"),
                "password"=>$request->param("password"),
                "role_id"=>$request->param("role")
                ];
            $controller->createUser($user);
            $response->redirect("/admin/dashboard");
        });
        $router->get("/[delete:action]/[i:id]?", function (Request $request, Response $response) use ($controller){
//        Auth::middleware($response);
            $controller->deleteUser($request->param("id"));
            $response->redirect("/admin/dashboard");
        });

        $router->post("/[update:action]/[i:id]?", function (Request $request, Response $response){
//        Auth::middleware($response);
            print_r("update");
        });
    });
//****************
    $router->with( "/managers", function () use ($router){
        $router->get("/?", function (Request $request, Response $response){
//        Auth::middleware($response);
            $controller = new UsersController();
            return $controller->show("manager");
        });

    });

    $router->with( "/customers", function () use ($router){
        $router->get("/?", function (Request $request, Response $response){
    //        Auth::middleware($response);
            $controller = new UsersController();
            return $controller->show("customer");
        });

    });

    $router->with( "/employees", function () use ($router){
        $router->get("/?", function (Request $request, Response $response){
    //        Auth::middleware($response);
            $controller = new UsersController();
            return $controller->show("employee");
        });

    });

    $router->with( "/tickets", function () use ($router){
      $controller = new TicketsController();
        $router->get("/?", function (Request $request, Response $response) use ($controller){
        //       Auth::middleware($response);
            return $controller->show();
        });
        $router->get("/[update:action]/[i:id]?", function (Request $request, Response $response) use ($controller){
        //        Auth::middleware($response);
            return $controller->form($request->param("id"));
        });
        $router->post("/[update:action]?", function (Request $request, Response $response) use ($controller){
        //        Auth::middleware($response);
            $response->redirect("/admin/dashboard/tickets");
        });
        $router->get("/[delete:action]/[i:id]?", function (Request $request, Response $response) use ($controller){
//        Auth::middleware($response);
            $controller->delete($request->param("id"));
            $response->redirect("/admin/dashboard/tickets");
        });

    });
});
