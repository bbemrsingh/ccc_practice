<?php
class Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";
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
    public function delete($model)
    {
        $id = $model->getData()[$this->getPrimaryKey()];
        $sql = 'DELETE FROM ' . $this->getTableName() . ' WHERE ' . $this->getPrimaryKey() . ' = ' . $id;
        $this->getAdapter()->delete($sql);
        header('Location: /internship/mvc_project/');
    }
    public function getAdapter()
    {
        return new Core_Model_Db_Adapter;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
}
