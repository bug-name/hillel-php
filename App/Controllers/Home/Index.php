<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class Index extends AbstractController
    {
        public function __construct()
        {
            $modelClass = new \App\Model\Index();
            $titles = $modelClass->list();
            $this->view('Home','Index', $titles);
        }
    }

