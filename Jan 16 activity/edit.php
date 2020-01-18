<link href="form.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<center>
    <div class="card" style="width: 25rem;margin-top:10%;">
    <div class="card-body">
    
            <form class="form" action="update.php" method="post">
                <?php 
                    $id=$_REQUEST['id'];
                    $link = mysqli_connect("localhost", "root", "", "inventory");
                    $querydatabase = "SELECT * from list where id=$id"; 
                    $result = mysqli_query($link, $querydatabase); 
                    $row = mysqli_fetch_array($result);
                ?>
                <a href="showData.php"><button type="button"  class="btn btn-success" >View Inventory</button></a>
                
                <h2>Update</h2>
                <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>"><br>
                <label>Name of the item:</label>
                <input class="input" name="item" type="text" value="<?php echo $row['item'];?>"><br>
                <label>Quantity:</label>
                <input class="input" name="datedone" type="text" value="<?php echo $row['quantity'];?>"><br>
                <label>Date:</label>
                <input class="input" name="datedone" type="text" value="<?php echo $row['datedone'];?>"><br>
                <label>Personel:</label>
                <input class="input" name="personel" type="text" value="<?php echo $row['personel'];?>"><br>
                <input class="submit" name="submit" type="submit" value="Update">
            </form>
        </div>
    </div>
</center>
