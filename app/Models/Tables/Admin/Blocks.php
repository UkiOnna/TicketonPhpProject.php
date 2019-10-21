<?php
//created by Yernar

namespace Models\Tables\Admin;


class Blocks
{
    protected $blocks;
    public function __construct()
    {
        $this->blocks = array(["title"=>"Менеджеры", "text"=>"Some text", "link"=>"/admin/dashboard/managers"],
            ["title"=>"Заказчики", "text"=>"Some text","link"=>"/admin/dashboard/customers"],
            ["title"=>"Работники","text"=> "Some text","link"=>"/admin/dashboard/employees"],
            ["title"=>"Тикеты", "text"=>"Some text","link"=>"/admin/dashboard/tickets"]);
    }
    public function getBlocks(){
        return $this->blocks;
    }
}