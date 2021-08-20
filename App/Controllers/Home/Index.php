<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class Index extends AbstractController
    {
        private $modelClass;

        public function __construct()
        {
            $this->modelClass = new \App\Model\Index();
        }

        public function index()
        {
            $titles = $this->modelClass->list();
            $this->view('Home','Index', $titles);
        }
    }

