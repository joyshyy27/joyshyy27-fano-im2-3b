<?php
    include "dbconnect.php";
?>

<link rel="stylesheet" href="list.css">

<div class = "title">Add Product</div>
<form action="saveProduct.php" method="get">
    <label for ="category">Select a category name</label>

    <select name = "category" id = "category">
    <?php

        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);

        while($row = mysqli_fetch_object($res)){
            echo "<option value =\"$row->id\">$row->name<option>";
        }
    ?></select>

    <br>

    <input type="text" placeholder="Enter name" name="name">
    <br>
    <input type="text" placeholder="Enter price" name="price">
    <br>
    <input type="submit" class = "btn">
</form>