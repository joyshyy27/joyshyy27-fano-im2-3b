<?php
    include "dbconnect.php";
?>

<link rel="stylesheet" href="list.css">

<div class = "title">Add Category</div>
<form action="saveCategory.php" method="get">

    <input type="text" placeholder="Enter Category Name" name="name">
    <br>
    <input type="text" placeholder="Enter Category Status" name="status">
    <br>
    <input type="submit" class = "btn">
</form>