<?php

namespace App\Model;

use Common\Database\DbConnector;
use Common\Database\DbSelect;

class Index extends AbstractModel
{

    private $dbConnect;

    public function __construct()
    {
        $connector = new DbConnector();
        $this->dbConnect = $connector->connect();
    }

    public function getAllTitles()
    {
        $selectObj = new DbSelect();
        $selectStr = $selectObj->SelectString('main', '*', 'INNER JOIN', 'post', 'main.id', 'post.main_id');
        $result = $this->dbConnect->query($selectStr);
        return $result->fetchAll();
    }
}
