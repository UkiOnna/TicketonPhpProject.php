<?php

namespace Models\Tables;

use Models\Table;

class Statuses extends Table {

    protected static $table_name = "statuses";

//    function map($array){
//        foreach ($array as &$item){
//
//            $statuses = new Statuses();
//
//            $item["status"] = $statuses->get( "*", [
//                "id" => $item["status_id"]
//            ]);
//
//        }
//
//        return $array;
//    }

}