<?php


namespace Common\Database;


use Exception;

class DbWhere extends DbConnector
{
    protected $where;

    public function andWhere($where)
    {
        $this->where[] = ['and' => $where];
    }

    public function orWhere($where)
    {
        $this->where[] = ['or' => $where];
    }

    public function getWhere()
    {
        $whereStr = '';
        if (empty($this->where)) {
            return null;
        } else if (is_string($this->where)) {
            return $this->where;
        } else if (is_array($this->where)) {
            foreach ($this->where as $key => $value) {
                if ($key == 'like') {
                    foreach ($value as $key2 => $value2) {
                        $whereStr .= trim($key) . ' = ' . trim($value);
                    }
                    return $whereStr;
                }
                $whereStr .= trim($key) . ' = ' . trim($value);
            }
        } else {
            throw new Exception('incorrect where param');
        }
        return $whereStr;
    }

}

