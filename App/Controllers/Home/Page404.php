<?php
    namespace Controllers\Home;

    use Controllers\AbstractController;

    class Page404 extends AbstractController
    {
        public function __construct()
        {
            $this->view('Home', 'Page404', 'Page404');
        }
    }

