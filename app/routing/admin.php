<?php
//created by Yernar
use Controllers\Admin\DashboardController;
use Controllers\Admin\UsersController;
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
        });
        $router->post("/[delete:action]/[i:id]?", function (Request $request, Response $response){
//        Auth::middleware($response);
print_r("delete");
        });

        $router->post("/[update:action]/[i:id]?", function (Request $request, Response $response){
//        Auth::middleware($response);
            print_r("update");
        });
    });

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
            print_r("customers");
        });

    });

    $router->with( "/employees", function () use ($router){
        $router->get("/?", function (Request $request, Response $response){
    //        Auth::middleware($response);
            print_r("employees");
        });

    });

    $router->with( "/tickets", function () use ($router){
        $router->get("/?", function (Request $request, Response $response){
    //        Auth::middleware($response);
            print_r("tickets");
        });

    });
});