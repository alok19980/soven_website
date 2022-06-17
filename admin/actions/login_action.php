<?php 

include("../db/config.php");
$email = "";
$role = "";

if(isset($_POST['login'])) {


    $query = "SELECT * FROM users WHERE email='" . $_POST['email'] . "' and password='" . md5($_POST['password']) . "'";

 
    $result = mysqli_query($con, $query);
  
    if (mysqli_num_rows($result) > 0) {
     
        while($row = mysqli_fetch_assoc($result)) {

          $email = $row['email'];
          $role = $row['role'];
          
        }
        session_start();
        $_SESSION['user_email'] = $email;
        $_SESSION['role'] = $role;
        header("Location:../index.php");
      } else {
        header("Location:../login.php?error=Invalid Credentials");
      }
}



?>