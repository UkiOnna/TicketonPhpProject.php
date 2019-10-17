<?php

use Controllers\Customer\Customer2Controller;
use Core\RenderEngine;


$router->get("/asd/?", function () {
    try {
        $res = RenderEngine::get()->fetch("customer/customer.tpl");
    } catch (SmartyException $e) {
        return $e->getMessage();
    }

    return $res;
});
