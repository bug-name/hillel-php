<?php
    namespace Controllers\Admin;

    use Controllers\AbstractController;

    class Admin extends AbstractController
    {
        private $modelClass;

        public function __construct()
        {
            $this->modelClass = new \App\Model\Admin();
        }

        public function index() {
            $titles = $this->modelClass->list();
            $this->view('Admin','Admin', $titles);
        }
    }
