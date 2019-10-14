<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 21:10
 */

namespace Core\Interfaces;


interface ControllerInterface
{

    public function render($template_name, $variables);

}