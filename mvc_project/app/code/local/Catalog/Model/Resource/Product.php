<?php

class Catalog_Model_Resource_Product extends Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function __construct()
    {
        $this->init('catalog_product', 'product_id');
    }

    public function save(Catalog_Model_Product $product)
    {

        $data = $product->getData();
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
    }

    public function insertSql($table_name, $data)
    {
        $columns = [];
        $values = [];
        foreach ($data as $col => $val) {
            $columns[] = sprintf("`%s`", $col);
            $values[] = sprintf("'%s'", addslashes($val));
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", $values);
        return "INSERT INTO $table_name($columns) VALUES($values);";
    }

    // function deletesql($tb, $data = [])
    // {
    //     $cols = $vals = [];
    //     foreach ($data as $column => $value) {
    //         $cols[] = "$column = '$value'";
    //     }

    //     $cols = implode("AND", $cols);
    //     $sql = "DELETE FROM {$tb} WHERE {$cols}";
    //     return $sql;
    // }

    // function updatesql($tb, $data = [], $where = [])
    // {
    //     $columns = $whereCond = [];
    //     foreach ($data as $col1 => $val) {
    //         $columns[] = "$col1 = '$val'";
    //     }
    //     foreach ($where as $col2 => $val) {
    //         $whereCond[] = "$col2 = '$val'";
    //     }
    //     $columns = implode(",", $columns);
    //     $whereCond = implode("AND", $whereCond);
    //     $sql =  "UPDATE {$tb} SET {$columns} WHERE {$whereCond}";
    //     return $sql;
    // }
}
