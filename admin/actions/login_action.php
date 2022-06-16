<?php 

include("../db/config.php");

if(isset($_POST['login'])) {
    //echo "Login Form submitted successfully";

    //echo "You entered email - " . $_POST['email'];
    //echo "You entered password - " . $_POST['password'];

    $query = "SELECT * FROM users WHERE email='" . $_POST['email'] . "' and password='" . md5($_POST['password']) . "'";

    //echo $query;
    $result = mysqli_query($con, $query);
    //echo "Value of result variable : " . json_encode($result);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["role"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
        }
      } else {
        echo "Invalid Credentials";
      }
}



?>