<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class About extends AbstractController
    {
        public function __construct()
        {
            $modelClass = new \App\Model\About();
            $titles = $modelClass->list();
            $this->view('Home', 'About', $titles);
        }

        public function other()
        {
            $modelClass = new \App\Model\About();
            $title = $modelClass->getAboutByTitle('title1');
            $this->view('Home', 'AboutOther', $title);
        }
    }
