<?php

use Controllers\IndexController;
use Core\RenderEngine;
use Klein\Klein;
use Models\Tables\Users;

$router = new Klein();

include "admin.php";

$router->get("/?", function () {
    $controller=new IndexController();
    $controller->show();
});

$router->dispatch();