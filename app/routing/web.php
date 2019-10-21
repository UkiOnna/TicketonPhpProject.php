<?php

use Controllers\IndexController;
use Core\RenderEngine;
use Klein\Klein;
use Models\Tables\Users;

$router = new Klein();

include "admin.php";
include "auth.php";include "customer.php";include "manager.php";
$router->get("/?", function () {
    $controller=new IndexController();
    $controller->show();
});

include "manager.php";

$router->dispatch();