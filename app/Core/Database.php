<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 27.09.2019
 * Time: 21:49
 */

namespace Core;


use Medoo\Medoo;

class Database extends Medoo
{
    public function __construct()
    {
        parent::__construct(Config::database());
    }

}