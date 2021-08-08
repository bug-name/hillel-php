<?php

namespace Core;

use App\Index;
use App\About;
use App\Gallery;
use App\Page404;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"];
    }

    public function run()
    {
        $classNamespace = ltrim($this->href, '/');

        switch ($classNamespace) {
            case '':
                $runController = new Index();
                break;
            case 'about':
                $runController = new About();
                break;
            case 'gallery':
                $runController = new Gallery();
                break;
            default:
                $runController = new Page404();
        }

        $runController->index();
    }
}
