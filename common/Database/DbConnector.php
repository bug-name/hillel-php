<?php

namespace Common\Database;

class DbConnector
{
    private $dns;
    private $user;
    private $password;

    public function __construct()
    {
        $dirPath = __DIR__;
        $config = require $dirPath . '/../../config/db-config.php';

        $this->dns =
            $config['driver'] . ':' .
            'dbname=' . $config['dbname'] . ';' .
            'host=' . $config['host'] . ':' .
            $config['port'];

        $this->user = $config['user'];
        $this->password = $config['password'];
    }

    public function connect()
    {
        return new \PDO($this->dns, $this->user, $this->password);
    }
}
