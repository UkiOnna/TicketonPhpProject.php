<?php

namespace Models\Tables;

use Models\Table;
use Models\Tables\Admin\Roles;

class Users extends Table
{
    protected static $table_name = "users";

    function map($array)
    {
        foreach ($array as &$item) {
            $roles = new Roles();
            $id = $item["role_id"];
            $item["role"] = $roles->get("*", ["id" => $id]);
        }
        return $array;
    }
}