<?php 
class View_Product_List{
    public function toHtml(){
        echo "today is the Day";
}


public function __construct(){
    echo "Ankit";
    $this->ShowList();
}

public function ShowList(){
    $queryobj = new Lib_Sql_Query_Builder();
    $result = $queryobj->fetchData('ccc_product');
    // print_r($result);

    echo '
    <table>
        <tr>
            <th>Product Name</th>
            <th>Sku</th>
            <th>Category</th>
            <th>Operations<th>
        </tr>';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'. $row['Product_name'];'</td>';
                echo '<td>'. $row['sku'];'</td>';
                echo '<td>'. $row['category'];'</td>';

                echo '<td>. 
                        <button>
                            <a href="update.php?updateid='. $id .'">
                                Update</a></button>
                      
                        <button>
                            <a href="delete.php?deleteid='.$id.'">
                                Delete</a><button>
                    </td>';
                echo '</tr>';
                
                echo '</table>';

        }
    
    
    '
    
}
