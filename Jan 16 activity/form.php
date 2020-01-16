<!-- <link href="form.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<center>
<?php 
?>
<div class="card" style="width: 25rem;margin-top:10%;">
  <div class="card-body">
  
    <form class="form" action="main.php" method="post">
    <h2>Add new inventory</h2><br>
    <label>Item name:</label>
    <input class="input" name="item" type="text" value=""><br>
    <label>Quantity:</label>
    <input class="input" name="quantity" type="number" value=""><br>
    <label>Date:</label>
    <input class="input" name="datedone" type="date" value="" placeholder="mm/dd/yy"><br>
    <label>Personel:</label>
    <input class="input" name="personel" type="text" value=""><br>
    <input class="submit" name="submit" type="submit" value="Insert">
</form>
</center>
   
