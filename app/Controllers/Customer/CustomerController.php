<?php

namespace Controllers\Customer;


use Core\Abstracts\Controller;
use Klein\Request;
use Models\Tables\Tickets;

class CustomerController extends Controller
{
    function show()
    {
        return $this->render("customer/customer");
    }

    function showById($id)
    {
        $table = new Tickets();
        $ticket = $table->select("*",[
            "id"=>$id
        ]);
        return $this->render("customer/customer",[
            "ticket"=>$ticket
        ]);
    }

    function showCancelled()
    {
        $table = new Tickets();
        $tickets=$table->select();
//        $tickets = $table->select("*",[
//            "status_id"=>2
//        ]);
        $tickets = $table->map($tickets);
        return $this->render("customer/cancelledTickets", [
            "tickets" => $tickets
        ]);
    }

}