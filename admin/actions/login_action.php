<?php 

include("../db/config.php");

if(isset($_POST['login'])) {
    //echo "Login Form submitted successfully";

    //echo "You entered email - " . $_POST['email'];
    //echo "You entered password - " . $_POST['password'];

    $query = "SELECT * FROM users WHERE email='" . $_POST['email'] . "' and password='" . $_POST['password'] . "'";

    //echo $query;
    $result = mysqli_query($con, $query);
    //echo "Value of result variable : " . json_encode($result);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_row($result);
        echo "Fetched Email - " . $row['email'] . " Fetched Name - " . $row['name'] . " Fetched Role - " . $row['role'];
        echo "Logged In";
    } else { 
        echo "Incorrect User Name and Password";
    }
}



?>