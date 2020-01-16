<?php
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
  
?>