<?php

namespace Controllers\Manager;

use Core\Abstracts\Controller;
use Models\Tables\Tickets;

class TicketsController extends Controller{

    protected $layout = "main";
    //const ITEMS_COUNT = 10;


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

    function getById($id){

    }

}