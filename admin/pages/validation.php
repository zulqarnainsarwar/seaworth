<?php
 session_start();
 include("connection.php");
//  $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "seaworth";
// $conn = mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $query = "SELECT * FROM  usertable where name = '$name'  and pass = '$password";
 $data=mysqli_query($conn,$query);
// $display =mysqli_num_rows($data);
 if($data)
 {   echo  "<div class='alert alert-info'>
    <strong>Login Successfully!.</strong>
</div>";
    $_SESSION['name']= $name;
     header('location:../index.php');
     
    }
 else
 {
     echo "<div class='alert alert-info'>
     <strong>Login Failed!.</strong>
 </div>";
     header('location:../../admin/pages/login.php');
 }
}
?>
