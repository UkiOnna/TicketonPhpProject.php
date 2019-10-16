<?php

namespace Controllers\Manager;

use Core\Abstracts\Controller;
use Models\Tables\Tickets;


class ManagerController extends Controller{

    function show(){

        $table = new Tickets();
        $tickets = $table->select();
        $tickets = $table->map($tickets);

        return $this->render("manager/dashboard", [
            "tickets" => $tickets
        ]);
    }

}