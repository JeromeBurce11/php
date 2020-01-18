<?php
    $id=$_REQUEST['id'];
    $connection = mysqli_connect("localhost", "root", "", "inventory");
    $sqldatabase= "DELETE FROM list where id=$id";
    $query = mysqli_query($connection, $sqldatabase);
    header("location:showData.php");
?>
