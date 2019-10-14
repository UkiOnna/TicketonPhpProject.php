<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 21:15
 */

namespace Core;


use Smarty;

final class RenderEngine
{
    private  static $engine;

    private function __construct()
    {
        self::$engine=new Smarty();
        self::$engine->setTemplateDir(Helpers::path("app","Views"));
        self::$engine->setCompileDir(Helpers::path("app","Views","compiled"));
    }

    static function get(){
        if(!self::$engine instanceof Smarty){
            new self();
        }

        return self::$engine;
    }
}