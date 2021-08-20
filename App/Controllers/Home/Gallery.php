<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class Gallery extends AbstractController
    {
        private $modelClass;

        public function __construct()
        {
            $this->modelClass = new \App\Model\Gallery();
        }

        public function index()
        {
            $titles = $this->modelClass->list();
            $this->view('Home', 'Gallery', $titles);
        }
    }

