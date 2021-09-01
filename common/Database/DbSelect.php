<?php
namespace Common\Database;

use Exception;

class DbSelect extends DbWhere
{
    protected $tableName;
    protected $columnsName = '*';
    protected $orderBy;
    protected $join;
    protected $limit;
    protected $where;

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * @param mixed $columnsName
     */
    public function setColumnsName($columnsName)
    {
        $this->columnsName = $columnsName;
    }

    /**
     * @param mixed $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    /**
     * @param mixed $join
     */
    public function setJoin($join)
    {
        $this->join = $join;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function selectString()
    {
        $selectString = 'SELECT ' . $this->buildColumns()
                        . ' FROM ' . $this->buildTableName();
    }

    protected function buildColumns()
    {
        if (is_array($this->columnsName)) {
            $columnString = '';
            foreach ($this->columnsName as $key => $value) {
                if(!empty($columnString)){
                    $columnString .= ',';
                }
                if (is_int($key)) {
                    $columnString .= $value;
                } else {
                    $columnString .= $value . ' as ' . $key;
                }
            }
            return $columnString;

        } else if (is_string($this->columnsName)) {
            return $this->columnsName;
        } else {
            throw new Exception('parsing columns not found');
        }
    }

    protected function buildTableName()
    {
        if (is_array($this->tableName)) {
            $tableString = '';
            foreach ($this->tableName as $key => $value) {
                if(!empty($tableString)){
                    $tableString .= ',';
                }
                if (is_int($key)) {
                    $tableString .= $value;
                } else {
                    $tableString .= $value . ' as ' . $key;
                }
            }
            return $tableString;

        } else if (is_string($this->tableName)) {
            return $this->tableName;
        } else {
            throw new Exception('parsing columns not found');
        }
    }
}
