<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php
include("sql/connections.php");
include("sql/functions.php");


if(isset($_POST["submit"])){
    // $arr = array($_POST['name']);
    $result = insert("ccc_category",["name" =>$_POST['name']]);
    mysqli_query($conn,$result);
}
?>