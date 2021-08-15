<?php

namespace Core;


use Controllers\Home\Index;
use Controllers\Home\Page404;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"];
        $this->href = rtrim($this->href, '/');
        $this->href = explode('/', $this->href);
    }

    public function run()
    {
        if (isset($this->href[1])){

            if (ucfirst($this->href[1]) === 'Admin'){
                $namespace = 'Controllers\\Admin\\' . ucfirst($this->href[1]);
            } else {
                $namespace = 'Controllers\\Home\\' . ucfirst($this->href[1]);
            }

            if (class_exists($namespace)) {

                $controllerObj = new $namespace;

                if (isset($this->href[2])) {

                    $param = $this->href[2];
                    $functionName = $param;

                    if (method_exists($controllerObj, $functionName)) {
                        $controllerObj->$functionName();
                    }

                }

            } else {
                $controllerObj = new Page404();
            }

        } else {
            $controllerObj = new Index();
        }
    }

}
