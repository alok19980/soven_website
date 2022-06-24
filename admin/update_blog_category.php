<?php 

session_start();

include("db/config.php");

if(!isset($_SESSION['user_email'])) {
    header("Location:index.php");
}

if(isset($_GET['id'])) {

    $query_update_blog_category = "UPDATE blog_categories SET name='" . $_GET['name'] . "', parentId='" . $_GET['parentId'] . "' WHERE id='" . $_GET['id'] . "'";
    //echo $query_update_blog_category;
    if (mysqli_query($con, $query_update_blog_category)) {
        header("Location:view_blog_categories.php?error=up");
      } else {
        echo "Error: " . $query_update_blog_category . "<br>" . mysqli_error($con);
        header("Location:view_blog_categories.php?error=nup");
      }
}


?>