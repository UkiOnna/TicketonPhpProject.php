<?php

namespace Core\Abstracts;


use Core\Database;
use Core\Interfaces\ModelInterface;

abstract class Model implements ModelInterface
{
    public function db()
    {
        return new Database();
    }
}