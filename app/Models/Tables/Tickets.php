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

    function admin_map($array){//added by Yernar
      foreach ($array as &$item) {
        $statuses = new Statuses();
        $id = $item["status_id"];
        $item["status"] = $statuses->get( "*", [ "id" => $id ]);
        $users = new Users();
        $empl_id = $item["employee_id"];
        $item["employee"] = $users->get("*", ["id"=>$empl_id])[0];
        $cust_id = $item["customer_id"];
        $item["customer"] = $users->get("*", ["id"=>$cust_id])[0];
      }
      return $array;
    }
}
