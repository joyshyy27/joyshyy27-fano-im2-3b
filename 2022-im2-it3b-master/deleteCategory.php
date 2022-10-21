<?php
    require_once "dbconnect.php";

    $catID = $_GET['id'];

    $sqlQuery = "DELETE from category where id = $catID";
    $res = $conn->query($sqlQuery);

    if($res){
        header("Location: categoryList.php");
    }
?>