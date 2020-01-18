
<?php 
    include("inventory.php");
    $obj = new inventory();

    $add= $obj->addinventory();
    echo $add;
    // $showlist= $obj->showinventorylist();
    // echo $showlist;
    // $obj->disconnect();
  ?>