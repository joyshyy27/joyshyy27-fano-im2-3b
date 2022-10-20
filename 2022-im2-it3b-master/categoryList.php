<?php
    require_once "dbconnect.php";
?>


<link rel="stylesheet" href="style.css">

 <table>
    <tr>

        <th>ID</th>
        <th>Category name</th>
        <th>Category Status</th>
        <th>Actions </th>
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
                    <td>
                        <a class="add" href="addCategory.php?id=<?php echo $row->id?>">Add</a>
                        <a class="upd" href="updateCategory.php?id=<?php echo $row->id?>">Update</a>
                        <a class="del" href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a></td>
                </tr>
        <?php
            }   
        ?>
</table>


<!-- <style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>

<h4>Category List</h4>

<table>
    <tr>
        <th>id</th>
        <th>Category name</th>
        <th>Category stats</th>
        <th>action</th>
    </tr>
    
    <?php
        $sql = "SELECT * from category";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->status</td>";
            echo "<td><a href=\"#\">Delete</a></td>";
            echo "</tr>";
        }
    
    ?>

</table>

 -->
