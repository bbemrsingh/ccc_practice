<?php

/**  The class is a collection of resources with methods for setting resource, selecting data,
 *  filtering data, loading data from the database, and retrieving the data. */

class Core_Model_Resource_Collection_Abstract
{
    protected $_resource = null;
    protected $_select = [];
    protected $_data = [];
    // public function __construct()
    // {
    // echo 123;
    // } 
    public function setResource($resource)
    {
        $this->_resource = $resource;
        return $this;
    }
    public function select()
    {
        $this->_select['FROM'] = $this->_resource->getTableName();
        return $this;
    }
    /**
     * function adds a filter condition to the WHERE clause of a SQL query in

     * `field` parameter represents the field/column in the database table that you want to filter on.
     * It specifies the name of the field you want to filter by.
    
     * `value` parameter represents the value that you want to filter the field by. It could be a string, number, boolean, or any other data type
     * depending on the field you are filtering.
     * 
     * `addFieldToFilter` function is returning the current instance of the object (``)
     * after adding the field and value to the `_select['WHERE']` array.
     */
    public function addFieldToFilter($field, $value)
    {
        $this->_select['WHERE'][$field][] = $value;
        return $this;
    }
    /**
     * The function `load` retrieves data from a database table based on specified conditions and stores
     * the results as product objects.
     * 
     * It's querying a database table specified in the `->_select['FROM']` property. 
     * It constructs a SQL query based on the conditions provided in the `->_select["WHERE"]` property.
     * The function then executes the query and fetches all rows from the database using the resource adapter. 
     * Each row is then used to create a new instance of a product
     * model and added
     */
    public function load()
    {
        $sql = "SELECT * FROM {$this->_select['FROM']}";
        if (isset($this->_select["WHERE"])) {
            $whereCondition = [];
            foreach ($this->_select["WHERE"] as $column => $value) {
                foreach ($value as $_value) {
                    if (!is_array($_value)) {
                        $_value = array('eq' => $_value);
                    }
                    foreach ($_value as $_condition => $_v) {
                        if (is_array($_v)) {
                            $_v = array_map(function ($v) {
                                return "'{$v}'";
                            }, $_v);
                            $_v = implode(',', $_v);
                        }
                        switch ($_condition) {
                            case 'eq':
                                $whereCondition[] = "{$column} = '{$_v}'";
                                break;
                            case 'in':
                                $whereCondition[] = "{$column} IN ({$_v})";
                                break;
                            case 'like':
                                $whereCondition[] = "{$column} LIKE '{$_v}'";
                                break;
                        }
                    }
                }
            }
            $sql .= " WHERE " . implode(" AND ", $whereCondition);
            // print_r($whereCondition);
        }
        // echo $sql;
        $result = $this->_resource->getAdapter()->fetchAll($sql);
        foreach ($result as $row) {
            $this->_data[] = Mage::getModel('catalog/product')->setData($row);
        }
        // print_r($this->_data);
    }
    public function getData()
    {
        $this->load();
        return $this->_data;
    }
}
