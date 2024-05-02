<?php
include '../controller/viewallusercontrol.php';
?>
<html>

<body>
 <h1>   All Users</h1>
<?php
if($result->num_rows>0)
{echo "<table>";
    echo "<th>ID</><th>Name</th> <th> Email</th> <th>profession</th> <th>Image</th>";
    foreach($result as $row)
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['profession']."</td>";
        echo "<td>"."<img src='".$row['file']."' width=200 >"."</td>";
        echo "<td><a href='../view/edituser.php?userid=".$row['id']."'> Edit<a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "No users found";
}

?>

</body>
    </html>