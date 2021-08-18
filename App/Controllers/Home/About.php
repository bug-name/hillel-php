<?php

    namespace Controllers\Home;

    use Core\ViewHome;

    class About
    {
        public function __construct()
        {
            $modelClass = new \App\Model\About();
            $titles = $modelClass->list();
            ViewHome::view('About', $titles);
        }

        public function other()
        {
            $modelClass = new \App\Model\About();
            $title = $modelClass->getAboutByTitle('title1');
            ViewHome::view('AboutOther', $title);
        }
    }
