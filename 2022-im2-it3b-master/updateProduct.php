<?php
    require_once "dbconnect.php";

    $prodID = $_GET['id'];

    $sqlQuery = "SELECT * from product where id = $prodID";
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();

    if($_POST){
        $prodCat = $_POST['category'];
        $prodName = $_POST['name'];
        $prodPrice = $_POST['price'];
        $sqlQuery = "UPDATE product set category = '$prodCat' name = '$prodName', price ='$prodPrice' where id = $prodID ";
        
        $res = $conn->query($sqlQuery);

        if($res)
            header("Location: productList.php");
    }
?>

<form action="" method="post">
    <label for ="category">Select a Category Name</label>
    <select name = "category" id = "category">
<!-- 
    <?php

        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);

        while($row = mysqli_fetch_object($res)){
            echo "<option value =\"$row->id\">$row->name<option>";
        }
    ?></select> -->


    <input type="text" placeholder="Enter Product Name" 
        name="name" 
        value="<?php echo $row['name']?>">
    <br>
    <input type="text" placeholder="Enter Product Price" 
        name="price" 
        value="<?php echo $row['price']?>">
    <br>
    <input type="submit">
</form>
