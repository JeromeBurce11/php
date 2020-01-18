<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php
//Sessions
// session_destroy();//destroy
$username=$_POST['username'];
$password=$_POST['password'];
if(!isset($_SESSION)){
    session_start();//start

        $connection = mysqli_connect("localhost", "root", "", "inventory");
        $querydatabase= "SELECT * From login";
        $query = mysqli_query($connection, $querydatabase);
            print_r($query);
        while($row = mysqli_fetch_assoc($query)){
            if($username == $row['username'] && $password == $row['password'] ){
                 header("location:Add.php");
                 $_SESSION['login']=true;
            }else{
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error","Wrong password or username!");';
                echo '},1000);</script>';
                 $_SESSION['login']=false;
                 header("location:loginForm.php");
                
            }
        }
        mysqli_close($connection);
}

?>