<?php
    namespace Controllers\Admin;

    use Controllers\AbstractController;

    class Admin extends AbstractController
    {
        public function __construct()
        {
            $modelClass = new \App\Model\Admin();
            $titles = $modelClass->list();
            $this->view('Admin','Admin', $titles);
        }
    }
