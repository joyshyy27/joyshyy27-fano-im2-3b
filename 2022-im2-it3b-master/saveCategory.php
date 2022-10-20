<?php

    require_once "dbconnect.php";
    $catName = $_GET['name'];
    $catStatus = $_GET['status'];

    $sql = "INSERT into category (name , status) values ('$catName', '$catStatus')";
    $result = $conn->query($sql);

    if($result)
        header("Location: categoryList.php");
    else
        echo "Failed";