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
    public function delete(Core_Model_Abstract $model)
    {
        $id = $model->getData()[$this->getPrimaryKey()];
        $sql = 'DELETE FROM ' . $this->getTableName() . ' WHERE ' . $this->getPrimaryKey() . ' = ' . $id;
        $this->getAdapter()->delete($sql);
    }
    public function getAdapter()
    {
        return new Core_Model_Db_Adapter;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
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
    function updatesql($tb, $data = [], $where = [])
    {
        $columns = $whereCond = [];
        foreach ($data as $col1 => $val) {
            $columns[] = "$col1 = '$val'";
        }
        foreach ($where as $col2 => $val) {
            $whereCond[] = "$col2 = '$val'";
        }
        $columns = implode(",", $columns);
        $whereCond = implode("AND", $whereCond);
        $sql =  "UPDATE {$tb} SET {$columns} WHERE {$whereCond}";
        return $sql;
    }
    public function save(Core_Model_Abstract $object)
    {
        $data = $object->getData();

        // agar primary key hoga to update karega if me jake. 
        if (isset($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $object->getId()]
            );
            $id = $this->getAdapter()->update($sql);
            //agar primary key nahi hoga to insert karega else me jake.
        } else {
            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $object->setId($id);
        }
        // print_r($product);
    }



    // public function save(Catalog_Model_Product $product)
    // {

    //     $data = $product->getData();
    //     if (isset($data[$this->getPrimaryKey()])) {
    //         unset($data[$this->getPrimaryKey()]);
    //     }
    //     $sql = $this->insertSql($this->getTableName(), $data);
    //     $id = $this->getAdapter()->insert($sql);
    //     $product->setId($id);
    // }

}
