<link href="form.css" rel="stylesheet">
<form class="form" action="15_Update.php" method="post">
    <?php 
        $id=$_REQUEST['id'];
        $link = mysqli_connect("localhost", "root", "", "PNTraining");
        $query = "SELECT * from persons where id='".$id."'"; 
        $result = mysqli_query($link, $query) or die ( mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>
    <a href="15_List.php">View Records</a>
    
    <h2>Form</h2>
    <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
    <label>First Name:</label>
    <input class="input" name="first_name" type="text" value="<?php echo $row['first_name'];?>">
    <label>Middle Name:</label>
    <input class="input" name="middle_name" type="text" value="<?php echo $row['middle_name'];?>">
    <label>Last Name:</label>
    <input class="input" name="last_name" type="text" value="<?php echo $row['last_name'];?>">
    <label>Email:</label>
    <input class="input" name="email" type="text" value="<?php echo $row['email'];?>"><br>
    <input class="submit" name="submit" type="submit" value="Update">
</form>