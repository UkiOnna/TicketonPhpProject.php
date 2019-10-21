<?php

use Controllers\Customer\CustomerController;
use Core\Helpers;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Cookies;
use Models\Hash;
use Models\Tables\Tickets;
use Models\Tables\Users;


$router->get("/customer/?", function () {
    $controller=new CustomerController();
    $controller->show();
});

$router->get("/customer/cancelledTickets/?", function () {
    $controller=new CustomerController();
    $controller->showCancelled();
});

$router->get("/customer/[i:id]/?", function (Request $request) {
    $controller=new CustomerController();
    $controller->showById($request->param("id"));
});

$router->post("/customer/?", function (Request $request,Response $response) {
    Auth::middleware($response);
    $users=new Users();
    $user=$users->has([
        "hash" => Cookies::get("hash")
    ]);

    $tickets = new Tickets();
    $tickets->insert([
        "title" => $request->param("title"),
        "description"=> $request->param("description"),
        "customer_id"=> $user->id ?: 1,
        "status_id"=>1
    ]);
    return  $response->redirect("/customer")->send();
});

$router->post("/customer/cancelledTickets/?", function (Request $request,Response $response) {
    Auth::middleware($response);
    $id = $request->param("id");
    return  $response->redirect("/customer/$id/")->send();
});

