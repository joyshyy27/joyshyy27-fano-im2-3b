<?php
    include "dbconnect.php";
?>

<form action="saveCategory.php" method="get">

    <input type="text" placeholder="Enter Category Name" name="name">
    <br>
    <input type="text" placeholder="Enter Category Status" name="status">
    <br>
    <input type="submit">
</form>