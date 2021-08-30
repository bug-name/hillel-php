<?php
namespace Common\Database;

class DbSelect
{
    public function SelectString($dbName, $selectItem = '*', $joinType = '', $joinDBName = '', $onColumn1 = '', $onColumn2 = '')
    {
        if ($joinType !== '' && $joinDBName != '') {
            $joinPart =  ' '. $joinType .' '. $joinDBName .' ';
        } else {
            $joinPart = '';
        }

        if ($onColumn1 !== '' && $onColumn2 != '') {
            $onPart = ' on ' . $onColumn1 . ' = ' . $onColumn2;
        } else {
            $onPart = '';
        }

        return  'SELECT ' . $selectItem .
                ' FROM ' . $dbName .
                $joinPart . $onPart;
    }
}
