<?php

    // include("sql/function.php");
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "ccc_practice";    
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    // to print array 
    // echo "<pre>" . "<br><br>";
    // print_r($data);
    // echo "</pre>";
    // $len = sizeof($dataa);   
    // echo $len . "<br>";
    
    
    
    // if(mysqli_connect_errno()){
    //     echo "failed";
    //     exit();
    // }

    // else{
    // echo "success";
    // }


if(isset($_POST["Submit"]))
{
    // $product_name = $_POST['product_name'];
    // $sku = $_POST['sku'];
    // $product_type = $_POST['product_type'];
    // $category = $_POST['category'];
    // $manufacturer_cost = $_POST['manufacturer_cost'];
    // $shipping_cost = $_POST['shipping_cost'];
    // $total_cost = $_POST['total_cost'];
    // $price = $_POST['price'];
    // $status = $_POST['status'];
    // $created_at = $_POST['created_at'];
    // $updated_at = $_POST['updated_at'];

    // $query= "INSERT INTO ccc_product VALUES('$product_name','$sku','$product_type','$category','$manufacturer_cost','$shipping_cost','$total_cost','$price','$status','$created_at','$updated_at')";
    // mysqli_query($connection,$query);
    $data = $_POST['product'];

    $result = insert('ccc_product', $data);
    // echo $res;

    $query = "$result";
    mysqli_query($conn,$query);


}
// mysqli_close($conn);

?>