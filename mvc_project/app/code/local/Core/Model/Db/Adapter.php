<?php

class Core_Model_Db_Adapter
{
    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "mvc_project"
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"],
            );
        }
        return $this->connect;
    }
    /**
     * These PHP functions fetch rows and all rows from a database query result respectively.
     * query can be a SELECT
     * statement to retrieve data from one or more tables based on specified criteria. The query can
     * include conditions, joins,
     * 
     * `fetchRow` returns a single row fetched from the database based on the
     * provided query. It fetches the row using `mysqli_fetch_assoc` and returns it as an associative
     * array.
     */

    public function fetchRow($query)
    {
        $row = [];
        $this->connect();
        $result = mysqli_query($this->connect, $query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
    }
    public function fetchAll($query)
    {
        $row = [];
        $result = $this->connect()->query($query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row[] = $_row;
        }

        return $row;
    }
    public function insert($query)
    {
        $this->connect();
        $sql = $this->connect->query($query);

        if ($sql) {
            return mysqli_insert_id($this->connect);
        } else {
            return false;
        }
    }
    public function update($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return mysqli_insert_id($this->connect);
        } else {
            return false;
        }
    }
    public function delete($query)
    {
        if (mysqli_query($this->connect(), $query)) {
            return mysqli_insert_id($this->connect());
        } else {
            return false;
        }
    }


    // public function query($query)
    // {
    // }
    // public function fetchPairs($query)
    // {
    // }
    // public function fetchOne($query)
    // {
    // }


    // public function fetchAll($query)
    // {
    //     $row = [];
    //     $result = $this->connect->query($query);
    //     while ($_row = mysqli_fetch_assoc($result)) {
    //         $row = $_row;
    //     }
    //     return $row;
    // }

    // public function fetchRow($query)
    // {
    //     $row = [];
    //     $result = $this->connect->query($query);
    //     while ($_row = mysqli_fetch_assoc($result)) {
    //         $row = $_row;
    //     }
    //     return $row;
    // }

    // public function update($query)
    // {
    //     if ($this->connect->query($query)) {
    //         return mysqli_insert_id($this->connect);
    //     } else {
    //         return false;
    //     }
    // }

    // public function delete($query)
    // {
    //     if (mysqli_query($this->connect(), $query)) {
    //         return mysqli_insert_id($this->connect());
    //     } else {
    //         return false;
    //     }
    // }

}

