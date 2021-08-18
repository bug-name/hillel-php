<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class Gallery extends AbstractController
    {
        public function __construct()
        {
            $modelClass = new \App\Model\Gallery();
            $titles = $modelClass->list();
            $this->view('Home', 'Gallery', $titles);
        }
    }

