<?php


//     Read data(fetch records) SQL generate function

function read_data($table, $columns = ['*'], $where_cn = []){
    // columns -- > (if columns are not given then it takes *)
    $columns_name = implode(', ', $columns);

    // where con 
    $where_con = [];
    foreach($where_cn as $key => $val){
        $where_con[] = "$key = '$val'";
    }
    $where_con = implode(' AND ', $where_con);  // AND, OR
    $sql_str = "SELECT {$columns_name} FROM {$table}";
    if(!empty($where_con)){
        $sql_str .= " WHERE {$where_con}";
    }
    return $sql_str;
}


    function insert($tb,$data = []) {      
        $cols =[];
        $vals = [];     
            foreach($data as $column => $value){      
                $cols[] = "`$column`";         
                $vals[] = "'$value'"; 
            }  
        
        $cols = implode(",", $cols);
        $vals = implode(",", $vals);      
        $sql = "INSERT INTO {$tb} ({$cols}) VALUES ({$vals})";
        return $sql; 
    }
    //  $data = ["name" => "ankit","std" => 12];
    // $da = insert("student", $data );
    // echo $da;
    function update($tb,$data = [],$where = []) {
        $columns = $whereCond = [];
            foreach($data as $col1 => $val){
                $columns[] = "$col1 = '$val'";      
            }
            foreach($where as $col2 => $val){
                $whereCond[] = "$col2 = '$val'";      
            }
                $columns = implode(",",$columns);     
                $whereCond = implode("AND",$whereCond);     
                $sql =  "UPDATE {$tb} SET {$columns} WHERE {$whereCond}";     
                return $sql; 
    }

    // $wh = array("sno" => 5);
    // $da = update("student", $data, $wh);
    // echo $da;

    function delete($tb, $data = []){
        $cols = $vals = [];
            foreach($data as $column => $value){
                $cols[] = "$column = '$value'";
            }
     
            $cols = implode("AND", $cols);      
            $sql = "DELETE FROM {$tb} WHERE {$cols}";     
            return $sql; 
    }
    
    function selectAll($table_name,$id){
        return "SELECT * FROM {$table_name} ORDER BY {$id} DESC LIMIT 10";
     }


    
    ?>