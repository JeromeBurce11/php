<?php
    $link = mysqli_connect("localhost", "root", "", "PNTraining");

    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        $query = "UPDATE persons set first_name='". $first_name . "', middle_name='". $middle_name ."',
                    last_name='". $last_name ."',email='". $email ."' where id='".$id."'"; 
        // echo $query;
        $result = mysqli_query($link, $query) or die ( mysqli_error());

        header("Location: 15_List.php"); 
    }
?>