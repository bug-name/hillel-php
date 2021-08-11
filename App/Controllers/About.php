<?php
    namespace Controllers;

    use Core\View;

    class About
    {
        public function __construct()
        {
            View::view('About');
        }

        public function other()
        {
            echo 'About other';
        }
    }
