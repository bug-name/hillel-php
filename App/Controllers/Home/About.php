<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class About extends AbstractController
    {

        private $modelClass;

        public function __construct()
        {
            $this->modelClass = new \App\Model\About();
        }

        public function index()
        {
            $titles = $this->modelClass->list();
            $this->view('Home', 'About', $titles);
        }

        public function other()
        {
            $title = $this->modelClass->getAboutByTitle('title1');
            $this->view('Home', 'AboutOther', $title);
        }

    }
