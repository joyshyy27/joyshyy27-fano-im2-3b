<?php
    require_once "dbconnect.php";
?>
<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>

<h4>Product List</h4>

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
                    <a class="add" href="addProduct.php?id=<?php echo $row->id?>">Add</a>
                    <a class="upd" href="updateProduct.php?id=<?php echo $row->id?>">Update</a>
                    <a class="del" href="deleteProduct.php?id=<?php echo $row->id?>">Delete</a></td>
    </tr>
    <?php
        }   
    ?>

</table>
