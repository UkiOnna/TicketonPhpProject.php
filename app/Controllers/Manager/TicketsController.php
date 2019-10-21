<?php

namespace Controllers\Manager;

use Core\Abstracts\Controller;
use Models\Tables\Statuses;
use Models\Tables\Tickets;
use Models\Tables\Users;

class TicketsController extends Controller{

    protected $layout = "main";


    function getTickets(){

        $tickets = new Tickets();

        $items = $tickets->select("*", [
            "ORDER" => ["id" => "DESC"]
        ]);

//        return $this->render("tickets", [
//            "title" => "Главная",
//            "tickets" => $items
//        ]);

    }

    function moveOrder($old_id, $new_id, $employee_id = null){

        $tickets = new Tickets();

        if (!$tickets->has(["id" => $old_id]))
            return false;

        if($employee_id){
            return $tickets->update([
                "status_id" => $new_id,
                "employee_id" => $employee_id
            ],[
                "id" => $old_id
            ]);
        }
        else{
            return $tickets->update([
                "status_id" => $new_id
            ],[
                "id" => $old_id
            ]);
        }

    }

    function getById($id){

    }

}