<?php
    require_once "dbconnect.php";
?>

<link rel="stylesheet" href="list.css">
<div class = "title">Category List</div>
<table>
    <tr>

        <th>ID</th>
        <th>Category name</th>
        <th>Category Status</th>
        <th>Actions</th>
    </tr>

    <?php
        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);
        while($row = mysqli_fetch_object($res)){
            ?>
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->status?></td>
                    <td><a class="upd" href="updateCategory.php?id=<?php echo $row->id?>">Update</a>
                        <a class="del" href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a></td>
                </tr>
        <?php
            }   
        ?>
        <div>
            <a class="add" href="addCategory.php">Add Category</a>
        </div>
        <br>
</table>
