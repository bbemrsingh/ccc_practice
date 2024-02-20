<?php

class Catalog_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE  {$this->_primaryKey} = {$id} LIMIT 1";
        // echo $sql;
        return $this->getAdapter()->fetchRow($sql);
    }

    public function getAdapter()
    {
        return new Core_Model_Db_Adapter;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    //above part is abstract
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
}
