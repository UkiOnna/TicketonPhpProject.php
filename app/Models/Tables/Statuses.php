<?php

namespace Models\Tables;

use Models\Table;

class Statuses extends Table {

    protected static $table_name = "statuses";

    function map($array){
        foreach ($array as &$item){

            $statuses = new Statuses();
            $users = new Users();

            $id = $item["status_id"];

            $item["status"] = $statuses->get( "*", [
                "id" => $id
            ]);

//            $item["author"] = $users->get("*", [
//                "id" => $item["user_id"]
//            ]);

        }

        return $array;
    }

}