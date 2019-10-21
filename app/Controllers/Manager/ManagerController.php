<?php
//Created by Lev

namespace Controllers\Manager;

use Core\Abstracts\Controller;
use Models\Tables\Tickets;
use Models\Tables\Users;


class ManagerController extends Controller{

    function show(){

        $table = new Tickets();

        $customer_tickets = $table->getById(1);
        $customer_tickets = $table->map($customer_tickets);

        $employee_tickets = $table->getById(4);
        $employee_tickets = $table->map($employee_tickets);

        return $this->render("manager/dashboard", [
            "customer_tickets" => $customer_tickets,
            "employee_tickets" => $employee_tickets,
            "employees" => (new Users())->select("*", [
                "role_id" => 4
            ])
        ]);
    }

}