<?php

use Core\Config;
use Core\Helpers;
use Klein\Klein;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

final class App
{
    public function __construct()
    {
        $this->initErrorHandler();
        $this->initRouter();
    }

    private function initRouter()
    {
        include Helpers::path("app", "routing", "web.php");
    }

    private function initErrorHandler()
    {
        $isDev = Config::composer("minimum-stability");
        $isDev = $isDev == "dev";
        ini_set("error_reporting", 1);
        error_reporting((E_ALL ^ E_NOTICE) * $isDev);
        if ($isDev) {
            $handler = new Run();
            $handler->appendHandler(new PrettyPageHandler());
            $handler->register();
        }
    }
}