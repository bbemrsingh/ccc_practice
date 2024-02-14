<?php 

class Core_Model_Db_Adapter{
    public $config = [
        "host"=> "localhost",
        "user"=> "root",
        "password"=> "",
        "database"=> "ccc_practice"
    ]; 
    public $connect = null; 
    public function connect($config)           
    {
        if(is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"],
            ); 
        }
    }
    public function fetchAll($query) 
    {

    }
    public function fetchPairs($query) 
    {

    }
    public function fetchOne($query) 
    {

    }
    public function fetchRow($query) 
    {

    }
    public function insert($query) 
    {

    }
    public function query($query) 
    {

    }
    public function update($query) 
    {

    }
    public function delete($query) 
    {

    }

}

?>