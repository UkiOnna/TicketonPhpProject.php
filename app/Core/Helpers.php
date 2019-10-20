<?php

namespace Core;

class Helpers
{
    private function __construct()
    { }
    static function path(...$parts)
    {
        $dir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "..";
        $dir = realpath($dir);
        if (isset($parts)) {
            foreach ($parts as $part) {
                $dir .= DIRECTORY_SEPARATOR . $part;
            }
        }
        return $dir;
    }
    static function url(...$parts)
    {
        $url = (isset($_SERVER["HTTPS"]) ? "https" : "http");
        $url .= "://" . $_SERVER["SERVER_NAME"].":8000";//$_SERVER["HTTP_HOST"]
        if (isset($parts)) {
            foreach ($parts as $part) {
                $url .= "/" . $part;
            }
        }
        return $url;
    }
    static function keyOrArray($array, $key = null)
    {
        if ($key == null) {
            return $array;
        }
        return $array[$key];
    }
}