<?php

namespace App\System;

use App\System\Route\Route;
use App\System\Route\RouteDispatcher;

class Kernel
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $requestMethod = ucfirst(strtolower($_SERVER['REQUEST_METHOD']));
        $methodName = 'getRoutes' . $requestMethod;
        foreach (Route::$methodName() as $routeConfig) {
            $routeDispatcher = new RouteDispatcher($routeConfig);
            $routeDispatcher->process();
        }
    }
}
