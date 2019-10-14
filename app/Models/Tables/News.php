<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 20:10
 */

namespace Models\Tables;


use Models\Table;

class News extends Table
{
    protected static $table_name = "news";

   public function getByTitle($title)
    {
        return $this->get("*", [
            "title" => $title
        ]);
    }
}