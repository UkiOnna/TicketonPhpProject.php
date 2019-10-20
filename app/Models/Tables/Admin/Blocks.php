<?php
//created by Yernar

namespace Models\Tables\Admin;


class Blocks
{
    protected $blocks;
    public function __construct()
    {
        $this->blocks = array(["title"=>"Менеджеры", "text"=>"Some text", "link"=>"/admin/managers"],
            ["title"=>"Заказчики", "text"=>"Some text","link"=>"/admin/customers"],
            ["title"=>"Работники","text"=> "Some text","link"=>"/admin/employees"],
            ["title"=>"Тикеты", "text"=>"Some text","link"=>"/admin/tickets"]);
    }
    public function getBlocks(){
        return $this->blocks;
    }
}