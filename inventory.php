
<?php
class inventory{
  
  public function getespecificdata(){
    $snackCategory =[];
    $connection = mysqli_connect("localhost", "root", "", "inventory");
    $sqldatabase= "SELECT * FROM list";
    $query = mysqli_query($connection, $sqldatabase);
    while($row = mysqli_fetch_assoc($query)){
        foreach($row as $key=>$value){
          if ($value =="Beverages"){
            array_push($snackCategory,$row);
            print_r($snackCategory);
          }
         
        }
     }
    mysqli_close($connection);
  }
}

?>