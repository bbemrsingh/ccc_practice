<?php
class Lib_Sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {
        // echo get_class($this);
    }

    public function insert($tableName, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values});";
    }
}

    function update($t, $data, $wh)
    {
        $columns = $whereCon =[];
        foreach ($data as $feild => $value) {
            $columns[] = "`$feild` = '$value'";
        }
        foreach ($wh as $feild => $value) {
            $whereCon[] = "`$feild` = '$value'";
        }
        $columns = implode(", ", $columns);
        $whereCon = implode(" AND ", $whereCon);

        return "UPDATE {$t} SET {$columns} WHERE {$whereCon};";
    }

    function delete($t, $wh)
    {
        foreach ($wh as $feild => $value) {
            $whereCol[] = "`$feild` = '$value'";
        }
        $whereColSrt = implode(" AND ", $whereCol);

        return "DELETE FROM {$t} WHERE {$whereColSrt}";
    }

    function select($t, $col = ['*'], $wh=[])
    {
        $colStr = implode(", ", $col);
        $where=$sel=[];
        foreach ($wh as $feild => $value) {
            $where[] = "`$feild` = '$value'";
        }
        $whereStr = implode(", ", $where);
        $sel = "SELECT {$colStr} FROM {$t}";
        if (!empty($wh)) {
            $sel .= " WHERE ({$whereStr});";
        }
        
        return $sel;
    }

function fetchData($tablename){
    $qry = $this->select($tablename);
    return $this->executeQuery($qry);

}