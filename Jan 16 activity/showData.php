<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<a href="Add.php"><button type="button"  class="btn btn-success" >Add Inventory</button></a>

<?php
 //show the data in the table
    $connection = mysqli_connect("localhost", "root", "", "inventory");
    $sqldatabase= "SELECT * FROM list";
    $query = mysqli_query($connection, $sqldatabase);
    echo '<table id="table" border="0" cellspacing="2 cellpadding="2"> <tr> <th>Item</th><th>Quantity</th><th>Date</th><th>Personel</th><th colspan="2">Action</th></tr>';
    while($row = mysqli_fetch_assoc($query)){
            echo "<tr><td>" . $row['item'] . "</td>
            <td>" . $row['quantity'] . "</td>
            <td>" . $row['datedone'] . "</td>
            <td>" . $row['personel'] . "</td>";
            $id = $row['id'];
            echo "<td><button><a href='delete.php?id=$id'>Delete</a></button></td>";
            echo "<td><button><a href='edit.php?id=$id'>Edit</a></button></td>";
            echo "</tr>";
     }
    echo "</table>";
    mysqli_close($connection);

?>