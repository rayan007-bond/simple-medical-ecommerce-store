 <?php
 $server="localhost";
 $username="root";
$password="";
$database="users";

 $conn = mysqli_connect($server,$username,$password,$database);
 if($conn){
    
 }
 else{
    die("error hai janii".mysqli_connect_error());
 }

 ?>