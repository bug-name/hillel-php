<?php

namespace Core;

use Controllers\Index;
use Controllers\Page404;

final class Router
{
    private $href;
    private $namespace;
    private $param;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"];
        $this->href = rtrim($this->href, '/');
        $this->href = explode('/', $this->href);
    }

    public function run()
    {
        if (isset($this->href[1])){
            $this->namespace = 'Controllers\\' . ucfirst($this->href[1]);
            if (class_exists($this->namespace)) {
                $controllerObj = new $this->namespace;
                if (isset($this->href[2])) {
                    $this->param = $this->href[2];
                    $functionName = $this->param;
                    $controllerObj->$functionName();
                }
                $this->param = $this->href[2];
            } else {
                $controllerObj = new Page404();
            }
        } else {
            $controllerObj = new Index();
        }
    }

}
