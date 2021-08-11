<?php
    namespace Controllers;

    use Core\View;

    class Index
    {
        public $arrData = [
            "Name" => "Ivan",
            "Age" => "30",
        ];
        public function __construct()
        {
            View::view('Index', $this->arrData);
        }
    }

