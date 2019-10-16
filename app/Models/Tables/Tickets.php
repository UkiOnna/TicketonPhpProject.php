<?php

namespace Models\Tables;

use Models\Table;

class Tickets extends Table {

    protected static $table_name = "tickets";

    function map($array){
        foreach ($array as &$item){

            $categories = new Statuses();
//            $users = new Users();
//
//            $id = $item["category_id"];
//
//            $item["category"] = $categories->get( "*", [
//                "id" => $id
//            ]);
//
//            $item["author"] = $users->get("*", [
//                "id" => $item["user_id"]
//            ]);

        }

        return $array;
    }

}