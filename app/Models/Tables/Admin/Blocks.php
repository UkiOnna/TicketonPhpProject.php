<?php
//created by Yernar

namespace Models\Tables\Admin;


class Blocks
{
    protected $blocks;
    public function __construct()
    {
        $this->blocks = array(["title"=>"Менеджер", "text"=>"Some text", "link"=>"/admin/managers"],
            ["title"=>"Заказчики", "text"=>"Some text","link"=>"/admin/customers"],
            ["title"=>"Работники","text"=> "Some text","link"=>"/admin/employees"],
            ["title"=>"Тикеты", "text"=>"Some text","link"=>"/admin/tickets"]);
    }
    public function getBlocks(){
        return $this->blocks;
    }

    function map($array)
    {
        foreach ($array as &$item) {
            $item["title"]= $item[0];
            $item["text"]= $item[1];
            $item["link"]= $item[2];
        }
        return $array;
    }
}