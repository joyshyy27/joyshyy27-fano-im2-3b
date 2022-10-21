<?php
    require_once "dbconnect.php";

    $prodID = $_GET['id'];

    $sqlQuery = "DELETE from product where id = $prodID";
    $res = $conn->query($sqlQuery);

    if($res){
        header("Location: productList.php");
    }
?>