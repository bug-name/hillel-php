<?php

    namespace Controllers\Home;

    use Core\ViewHome;

    class About
    {
        public function __construct()
        {
            ViewHome::view('About');
        }

        public function other()
        {
            echo 'About other';
        }
    }
