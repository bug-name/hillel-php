<?php
    namespace Controllers\Home;

    use Core\ViewHome;

    class Page404
    {
        public function __construct()
        {
            ViewHome::view('Page404');
        }
    }

