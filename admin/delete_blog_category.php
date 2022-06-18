<?php 

session_start();

include("db/config.php");

if(!isset($_SESSION['user_email'])) {
    header("Location:index.php");
}

if(isset($_GET['id'])) {
    $query_delete_blog_category = "DELETE FROM blog_categories WHERE id='" . $_GET['id'] . "'";

    if (mysqli_query($con, $query_delete_blog_category)) {
        header("Location:view_blog_categories.php?error=del");
      } else {
        header("Location:view_blog_categories.php?error=ndel");
      }
}


?>