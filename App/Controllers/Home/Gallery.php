<?php
    namespace Controllers\Home;

    use Core\ViewHome;

    class Gallery
    {
        public function __construct()
        {
            ViewHome::view('Gallery');
        }
    }

