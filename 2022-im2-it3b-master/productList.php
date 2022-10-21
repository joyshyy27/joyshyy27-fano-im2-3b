<?php
    require_once "dbconnect.php";
?>

<link rel="stylesheet" href="list.css">
<div class = "title">Product List</div>
<table>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    
    <?php
        $sql = "SELECT category.name as category, product.id, product.name, product.price FROM category inner JOIN product on category.id = product.category;";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
    ?>
    <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->category?></td>
                <td><?php echo $row->name?></td>
                <td><?php echo $row->price?></td>
                <td>
                    <a class="upd" href="updateProduct.php?id=<?php echo $row->id?>">Update</a>
                    <a class="del" href="deleteProduct.php?id=<?php echo $row->id?>">Delete</a></td>
    </tr>
    <?php
        }   
    ?>
    <div>
        <a class="add" href="addProduct.php">Add Product</a>
    </div>
    <br>
</table>
