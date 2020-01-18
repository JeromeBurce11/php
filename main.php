
<?php 
    include("inventory.php");
    $obj = new inventory();

    $add= $obj->getespecificdata();
    echo $add;
    // $showlist= $obj->showinventorylist();
    // echo $showlist;
    // $obj->disconnect();
  ?>