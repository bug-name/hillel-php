<?php
    namespace Controllers\Home;

    use Core\ViewHome;

    class Index
    {
        public $arrData = [
            "Name" => "Ivan",
            "Age" => "30",
        ];
        public function __construct()
        {
            ViewHome::view('Index', $this->arrData);
        }
    }

