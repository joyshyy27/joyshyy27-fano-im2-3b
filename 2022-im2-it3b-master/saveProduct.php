<?php

    require_once "dbconnect.php";
    
    $prodCat = $_GET['category'];
    $prodName = $_GET['name'];
    $prodPrice = $_GET['price'];

    $sql = "INSERT INTO product (category , name, price) values ('$prodCat', '$prodName', '$prodPrice')";
    $result = $conn->query($sql);

    if($result)
        header("Location: productList.php");
    else
        echo "Failed";