<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inventory List</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <a href='Add.php'><button class="btn btn-outline-success my-2 my-sm-0" >Add Inventory</button></a>
      <?php 
        $categories = array("All","Beverages" , "Soaps" , "Snacks","Detergents");
        foreach ($categories as  $category) {
            echo "<a href='showData.php?category=$category'><button style='margin:0 2px' class='btn btn-outline-success my-2 my-sm-2' >$category</button></a>";
        }
      ?>
      
      <a href='logout.php'><button class="btn btn-outline-success my-2 my-sm-0" >Logout</button></a>

  </div>
</nav>
<?php
 //show the data in the table
    $connection = mysqli_connect("localhost", "root", "", "inventory");
    if (isset($_REQUEST["category"])) {
        $filter = $_REQUEST["category"];
    }else{
        $filter = "All";
    }
    $sqldatabase= "SELECT * FROM list ";
    if ($filter !== 'All') {
        $sqldatabase.= "where category = '$filter' ";
    }
    $query = mysqli_query($connection, $sqldatabase);
    echo '<table id="table" border="0" cellspacing="2 cellpadding="2"> <tr> <th>Item</th><th>Quantity</th><th>Date</th><th>Personel</th><th colspan="2">Action</th></tr>';
    while($row = mysqli_fetch_assoc($query)){
            echo "<tr>
            <td>" . $row['item'] . "</td>
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