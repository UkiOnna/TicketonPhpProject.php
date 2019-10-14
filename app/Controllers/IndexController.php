<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 21:40
 */

namespace Controllers;


use Core\Abstracts\Controller;

class IndexController extends Controller
{
    public function show(){
        return $this->render("index",[
            "title"=>"Jeka Lox",
            "message"=>"It is true!"
        ]);
    }
}