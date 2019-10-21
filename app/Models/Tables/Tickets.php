<?php
//Created by Lev

namespace Models\Tables;

use Models\Table;

class Tickets extends Table {

    protected static $table_name = "tickets";

    function map($array){
        foreach ($array as &$item){

            $statuses = new Statuses();
            $users = new Users();


            $item['status'] = $statuses->get( "*", [
                "id" => $item["status_id"]
            ]);

            $item["customer"] = $users->get("*", [
                "id" => $item["customer_id"]
            ]);

        }

        return $array;
    }

    function admin_map($array){//added by Yernar
      foreach ($array as &$item) {
        $statuses = new Statuses();
        $id = $item["status_id"];
        $item["status"] = $statuses->select( "*", [ "id" => $id ]);
        $users = new Users();
        $empl_id = $item["employee_id"];
        $item["employee"] = $users->select("*", ["id"=>$empl_id]);
        $cust_id = $item["customer_id"];
        $item["customer"] = $users->select("*", ["id"=>$cust_id]);
      }
      return $array;
    }
}
