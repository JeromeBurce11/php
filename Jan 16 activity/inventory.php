<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<a href="form.php"><button type="button"  class="btn btn-success" >Add Inventory</button></a>
<?php
class inventory{

    private $item;
    private $quantity;
    private $date ;
    private $personel;
    //add inventory
    
    public function addinventory(){
        $connection = mysqli_connect("localhost", "root", "", "inventory");
        if($connection->connect_error){
          die("connection failed").$connection->connect_error;
        }else{
          echo "connected successfully";
        }
        if(isset($_POST['submit'])){ 
             $item = $_POST['item'];
            $quantity = $_POST['quantity'];
            $date = $_POST['datedone'];
             $personel = $_POST['personel'];
            
            if($item != '' && $quantity != '' && $date != '' && $personel != '' ){
                $sqldatabase = "INSERT INTO list (item, quantity, datedone, personel) 
                        VALUES ('$item', '$quantity', '$date', '$personel')";
                $query = mysqli_query($connection, $sqldatabase);
                echo "<span>You add an inventory successfully.</span>";
            }else{
                echo "<p>Unsuccessfully added! <br/> Some Fields are Blank.</p>";
            }
        }
        mysqli_close($connection);
    }
    //show the data in the table
    public function showinventorylist(){
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
                echo "<td><button><a href='15_Delete.php?id=$id'>Delete</a></button></td>";
                echo "<td><button><a href='15_Edit.php?id=$id'>Edit</a></button></td>";
                echo "</tr>";
         }
        echo "</table>";
        mysqli_close($connection);
    }
    public function deleteItemInTheList(){
        $id=$_REQUEST['id'];
        $connection = mysqli_connect("localhost", "root", "", "inventory");
        // $sqldatabase= "DELETE FROM list where id='".$id."'"";
        $query = mysqli_query($connection, $sqldatabase);
    }
    public function edititem(){
        $id=$_REQUEST['id'];
        $connection = mysqli_connect("localhost", "root", "", "inventory");
        $query = "SELECT * from persons where id='".$id."'"; 
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
    }
    
}
?>