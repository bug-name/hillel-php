<?php

namespace Core;

use App\SecondClass;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"];
    }

    public function run()
    {
        if ($this->href) {
            $classNamespace = 'App\\' . ucfirst(ltrim($this->href, '/'));

            if (class_exists($classNamespace)) {
                $classObj = new $classNamespace;
            } else {
                $classObj = new SecondClass();
            }
        } else {
            $classObj = new SecondClass();
        }
        $classObj->index();
    }
}
