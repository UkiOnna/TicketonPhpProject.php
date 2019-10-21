<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 27.09.2019
 * Time: 21:44
 */

namespace Core;


class Config
{
    private static $cfgs = [];

    private function __construct()
    {

    }

    static function fromName($name, $key = null)
    {
        if (self::$cfgs[$name]) {
            $cfg = self::$cfgs[$name];
        } else {
            $cfg = include Helpers::path("app", "config", "$name.php");
            self::$cfgs[$name] = $cfg;
        }
        return self::keyOrArray($cfg, $key);
    }

    static function database($key = null)
    {
        return self::fromName("database");
    }

    static function composer($key = null)
    {
        $composerDir = Helpers::path("composer.json");
        $composerFile = file_get_contents($composerDir);
        $composer = json_decode("$composerFile", true);

        return self::keyOrArray($composer, $key);
    }

    static function keyOrArray(array $arr, $key = null)
    {
        if ($key == null) {
            return $arr;
        }
        return $arr[$key];
    }
    static function main($key=null){
        return self::fromName("main",$key);
    }
}