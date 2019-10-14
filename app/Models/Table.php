<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 19:47
 */

namespace Models;


use Core\Abstracts\Model;

abstract class Table extends Model
{
    protected static $table_name;

    function select($join = "*", $columns = null, $where = null)
    {
        return $this->db()->select(static::$table_name, $join, $columns, $where);
    }

    function get($join = null, $columns = null, $where = null)
    {
        return $this->db()->get(static::$table_name, $join, $columns, $where);
    }

    function insert($datas)
    {
        return $this->db()->insert(static::$table_name, $datas);
    }

    function update($data, $where = null)
    {
        return $this->db()->update(static::$table_name, $data, $where);
    }

    function delete($where)
    {
        return $this->db()->delete(static::$table_name, $where);
    }

    function has($where)
    {
        return $this->db()->has(static::$table_name, $where);
    }

    function getById($id)
    {
        return $this->get("*", [
            "id" => $id
        ]);
    }

}