<?php

namespace App\Model;

use Common\Database\DbConnector;

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
        $sql = 'SELECT * FROM main INNER JOIN post on main.id = post.home_id';
        $result = $this->dbConnect->query($sql);
        return $result->fetchAll();
    }
}
