
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php

    require "config.php";
    /////////////////////////////
    if(!isset($_SESSION)){
        session_start();
        if(!$_SESSION['login']){
        header('Location: loginForm.php');
        }
        if(isset($_POST['submit'])){ 
           $category = $_POST['category'];
           $item = $_POST['item'];
            $quantity = $_POST['quantity'];
            $date = $_POST['datedone'];
             $personel = $_POST['personel'];
            if(empty($_POST["category"])|| empty($_POST["item"])||empty($_POST["quantity"])||empty($_POST["datedone"])||empty($_POST["personal"])){
               echo '<script type="text/javascript">';
               echo 'setTimeout(function () { swal("Error","Inputs must require!","error");';
               echo '},500);</script>';
            }
            if($item !="" && $quantity !="" && $date !="" && $personel!=""){   
                $sqldatabase = "INSERT INTO list (category,item, quantity, datedone, personel) 
                   VALUES ('$category','$item', '$quantity', '$date', '$personel')";
                $query = mysqli_query($connection, $sqldatabase);
                echo '<script type="text/javascript">';
               echo 'setTimeout(function () { swal("Successfully Added!","success");';
               echo '},500);</script>';
                header('location:showData.php');
            }
        }
        mysqli_close($connection);
    }
    
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inventory List</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <a href='showData.php'><button class="btn btn-outline-success my-2 my-sm-0" >View List</button></a>
      <a href='logout.php'><button class="btn btn-outline-success my-2 my-sm-0" >Logout</button></a>

  </div>
</nav>
<center>
<div class="card" style="width: 25rem;margin-top:10%;">
  <div class="card-body">
    <form class="form" action="Add.php" method="post">
    <h2>Add new inventory</h2><br>
    <label>Type of Item:</label>
        <select name="category">
            <option value="Beverages">Beverages</option>
            <option value="Snacks">Snacks</option>
            <option value="Soaps">Soaps</option>
            <option value="Detergents">Detergents</option>
        </select><br>
    <label>Item name:</label>
    <input class="input" name="item" type="text" value=""><br>
    <label>Quantity:</label>
    <input class="input" name="quantity" type="number" value=""><br>
    <label>Date:</label>
    <input class="input" name="datedone" type="date" value="" placeholder="mm/dd/yy"><br>
    <label>Personel:</label>
    <input class="input" name="personel" type="text" value=""><br>
      <!-- <a href='logout.php'><button class="btn btn-outline-success my-2 my-sm-0" >Logout</button></a> -->
    <input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" value="Insert">
    </form>
    </div>
</div>
</center>

