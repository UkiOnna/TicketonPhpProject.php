<?php
//Created by Lev

namespace Models\Tables;

use Models\Table;

class Tickets extends Table {

    protected static $table_name = "tickets";

    function map($array){
        foreach ($array as &$item){

            $statuses = new Statuses();
//            $users = new Users();

            $id = $item["status_id"];

            $item["status"] = $statuses->get( "*", [
                "id" => $id,
                "name"
            ]);

//            $item["customer"] = $users->get("*", [
//                "id" => $item["customer_id"]
//            ]);

        }

        return $array;
    }

}