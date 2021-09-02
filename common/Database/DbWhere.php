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

    public function likeWhere($where)
    {
        $this->where[] = ['like' => $where];
    }

    public function getWhere()
    {
        if (empty($this->where)) {
            return null;
        } else if (is_string($this->where)) {
            return $this->where;
        } else if (is_array($this->where)) {
            foreach ($this->where as $value) {
                if ($value == 'like') {

                }
                $data[] = trim($key) . ' = ' . trim($value);
            }
        } else {
            throw new Exception('incorrect where param');
        }
    }

}
//'id = 5'
//[
//[
//    'id' => 1,
//    'litle' => 'teset',
//]
//['like', ['columnName', 'value']]

