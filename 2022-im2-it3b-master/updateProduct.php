<?php
    require_once "dbconnect.php";

    $prodID = $_GET['id'];

    $sqlQuery = "SELECT * from product where id = $prodID";
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();

    if($_POST){
        $prodName = $_POST['name'];
        $prodPrice = $_POST['price'];
        $sqlQuery = "update product set name = '$prodName', price ='$prodPrice' where id = $prodID ";
        
        $res = $conn->query($sqlQuery);

        if($res)
            header("Location: productList.php");
    }
?>

<link rel="stylesheet" href="list.css">

<div class = "title">Update Product</div>
<form action="" method="post">
    <input type="text" placeholder="Enter Product Name" 
           name="name" 
           value="<?php echo $row['name']?>">
    <br>
    <input type="text" placeholder="Enter Product Price" 
           name="price" 
           value="<?php echo $row['price']?>">
    <br>
    <input type="submit" class = "btn">
</form>
