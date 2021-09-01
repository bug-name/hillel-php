<?php


namespace Common\Database;


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
        if (empty($this->where)) {
            return null;
        } else {
            foreach ($this->where as $value) {

            }
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

