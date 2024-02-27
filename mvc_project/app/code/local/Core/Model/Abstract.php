<?php

class Core_Model_Abstract
{
    protected $_data = [];

    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_modelClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct()
    {
        $this->init();
    }
    public function setResourceClass($resourceClass)
    {
    }
    public function setCollectionClass($collectionClass)
    {
    }

    public function getId()
    {
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
        return $this;
    }
    public function getResource()
    {
        // $modelClass = get_class($this);
        // $class = substr($modelClass,strpos($modelClass,'_Model_')+7) . '_Resource_' . substr($modelClass,strpos($modelClass,'_Model_')+7);
        // return new $class;
        return new $this->_resourceClass();
    }
    public function getCollection()
    {
        $collection = new $this->_collectionClass();
        $collection->setResource($this->getResource());
        // $collection->setModeClass($this->getModeClass());
        $collection->select();
        return $collection;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }


    /** function `camelCase2UnderScore` takes a string in camelCase format and converts it to
     * snake_case format by inserting an underscore before each uppercase letter (except the first
     * letter) and then converting the whole string to lowercase. If the input string is empty, it
     * returns the same empty string.*/
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }
    public function __call($method, $args)
    {

        $name = $this->camelCase2UnderScore(substr($method, 3));
        return isset($this->_data[$name])
            ? $this->_data[$name]
            : '';
    }
    public function __set($key, $value)
    {
    }
    public function __get($key)
    {
    }
    public function __unset($key)
    {
    }
    public function getData($key = null)
    {

        return $this->_data;
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
        $this->_data[$key] = $value;
        return $this;
    }
    public function removeData($key = null)
    {
    }
    public function save()
    {
        $this->getResource()->save($this); //returns catalog_Model_Resource_Product object
        return $this;
    }
    public function update()
    {
        $this->getResource()->update($this);
        return $this;
    }

    public function load($id, $column = null)
    {
        // print_r($this->getResource());
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }
    public function delete()
    {
        if ($this->getId()) {
            $this->getResource()->delete($this);
        }
        return $this;
    }
}
