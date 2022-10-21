<?php
    require_once "dbconnect.php";
?>

<style>
    *{
        background: #D4BBDD;
    }

    a{
        
        position: absolute;
        background-color:  #D0AB99;
        border: 3px solid #FDD1D2;
        border-collapse: collapse;
        padding: 10px;
        width: 30%;
        left: 50px;
        top: 100px;
        color: #FBEDE0;
        font-style: normal;
        font-size: 20px;
        text-align: center;
        text-decoration: none;
    }

    .cat{
        left: 34%;
        top: 30%;
    }

    .prod{
        left: 34%;
        top: 40%;
    }
</style>

<div>
    <a class = "cat" href = "categoryList.php">Manage Category</a>
    <br><br><br>
    <a class = "prod" href = "productList.php">Manage Product</a>
</div>