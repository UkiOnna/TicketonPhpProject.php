<?php
//created by Yernar
namespace Controllers\Admin;

use Core\Abstracts\Controller;
use Models\Tables\Admin\Blocks;

class DashboardController extends Controller
{
    function show(){
        $items = new Blocks();
        $blocks = $items->getBlocks();
        return $this->render("admin/dashboard",["blocks"=> $blocks]);//dashboard.tpl
    }
}