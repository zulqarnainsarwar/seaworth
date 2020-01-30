<?php
 session_start();
 include("connection.php");
 error_reporting(0);
//  header('location:login.php');
//  $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "seaworth";
// $conn = mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM  usertable where name = '$name' and pass = '$password'";
    $data=mysqli_query($conn,$query);
   $display =mysqli_num_rows($data);

 if($display == 1)
 {
     echo "<div class='alert alert-info'>
     <strong>Username Already Taken!.</strong>
 </div>";
    }
 else
 {
     $result = "insert into usertable(name,email, password) values('$name' ,'$email', '$pass')";
     mysqli_query($conn, $result);
     echo "<div class='alert alert-info'>
     <strong>Registration Sucessfully!.</strong>
 </div>";
 header('location:login.php');
    
 }
}
?>
