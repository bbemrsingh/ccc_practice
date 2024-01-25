<?php

include("sql/connections.php");
include("sql/functions.php");

$sql = fetch("ccc_category","cat_id","name");
$result = mysqli_query($conn, $sql);
if($result -> num_rows > 0){
    echo '<table style= "border: 1px solid black">';
    echo '<tr style= "border: 1px solid black">';
    while($row = mysqli_fetch_array($result)){
        
        foreach ($row as $col => $value){
            echo '<th>' . $col . '</th>';

        }
        break;
    }
    echo '</tr>';
    
    while($row = mysqli_fetch_array($result)){
    echo '<tr style= "border: 1px solid black">';
        foreach($row as $col => $value){
            echo '<td>' . $value . '</td>';
        }
    }
    echo '</tr>';
}
?>