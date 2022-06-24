<?php 
session_start();

$error = "";

if(!isset($_SESSION['user_email'])) {
	header("Location:index.php");
}

if(isset($_GET['error'])) {
    if($_GET['error'] == "del") {
        $error = "Category Deleted Successfully.";
    } else if ($_GET['error'] == "ndel") {
        $error = "Error Deleting Category";
    } else if ($_GET['error'] == "up"){
        $error = "Category Updated Successfully.";
    } else if ($_GET['error'] == "nup") {
        $error = "Error Updating Category";
    } else {
        $error = "";
    }
}

if(isset($_POST['update_category'])) {
    header("Location:update_blog_category.php?id=" . $_POST['old_id'] . "&name=" . $_POST['category'] . "&parentId=" . $_POST['parent'] . "");
}

include("db/config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Dashboard | Soven Developer</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/app.min.css" rel="stylesheet" />


<link href="assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />

</head>
<body data-bs-spy='scroll' data-bs-target='#sidebar-bootstrap' data-bs-offset='200'>

<?php include("components/header.php"); ?>

<?php include("components/side-menu.php"); ?>

<div id="content" class="app-content">

<div class="container">

<div class="row justify-content-center">

<div class="col-xl-10">

<div class="row">

<div class="col-xl-12">

<h1 class="page-header">
Article Categories
</h1>
<hr class="mb-4" />
<p> <?php echo $error; ?></p>
<div id="datatable" class="mb-5">
<div class="card">
<div class="card-body">
<?php

$query_blog_categories = "SELECT * FROM blog_categories";

$result = mysqli_query($con, $query_blog_categories);

if(mysqli_num_rows($result) > 0) { ?>
<table id="datatableDefault" class="table text-nowrap w-100">
<thead>
<tr>
<th>#</th>
<th>Category Name</th>
<th>Parent Category</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
	<?php while($row = mysqli_fetch_assoc($result)) { ?>
		<tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php 
        if($row['parentId'] == 0) {
            echo "None";
        } else {
            $query_parent_category = "SELECT * FROM blog_categories WHERE id='" . $row['parentId'] . "'";
            $result_parent_category = mysqli_query($con, $query_parent_category);
            if(mysqli_num_rows($result) > 0) {
                while($row_parent_category = mysqli_fetch_assoc($result_parent_category)) {
                    echo $row_parent_category['name'];
                }
            } else {
                echo "None";
            }
        }
        ?></td>
        <td>
        <a type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSm"><i class="fa fa-edit"></i></a>
        <div class="modal fade" id="modalSm">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Update Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="">
<div class="form-group mb-3">
  <label class="form-label" for="exampleFormControlInput1">Category Name</label>
  <input type="hidden" name="old_id" value="<?php echo $row['id']; ?>">
  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['name']; ?>" name="category" required>
</div>
<!-- select -->
<div class="form-group mb-3">
    <label class="form-label" for="exampleFormControlInput2">Select Parent Category</label>
    <select class="form-control" name="parent">
        <option name="None" value="0">None</option>
        <?php 
        $query_blog_categories = "SELECT * FROM blog_categories";
        $result_blog_categories = mysqli_query($con, $query_blog_categories);
        if(mysqli_num_rows($result_blog_categories) > 0) {
            while($row_blog_categories = mysqli_fetch_assoc($result_blog_categories)) { ?>
                <option name="<?php echo $row_blog_categories['name']; ?>" value="<?php echo $row_blog_categories['id']; ?>"><?php echo $row_blog_categories['name']; ?></option>
            <?php }
        }
        ?>
    </select>
</div>
<div class="form-group mb-3">
<button type="submit" class="btn btn-primary" name="update_category">Update Category</button>
</div>

</form>
                    </div>
                    <div class="modal-footer"> 
                    </div>
  
                </div>
            </div>
        </div>
        <a type="button" class="btn btn-danger" href="delete_blog_category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-solid fa-trash-can"></i></a>
        </td>
        </tr>
	<?php   } ?>
</tbody>
</table>
<?php } else { ?>
	
        <center>
            <img src="assets/img/error.jpg" style="width:30%;"/>
            <p><b> No Article Categories Found. </b></p>
        </center>
       
   
<?php }

?>


</div>

</div>
</div>
</div>


</div>


</div>

</div>

</div>

</div>

</div>


<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="theme-panel">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray" data-original-title="" title="">&nbsp;</a></li>
</ul>
<hr class="mb-0" />
<div class="row mt-10px pt-3px">
<div class="col-9 control-label text-dark fw-bold">
<div>Dark Mode <span class="badge bg-primary ms-1 position-relative py-4px px-6px" style="top: -1px">NEW</span></div>
<div class="lh-14 fs-13px">
<small class="text-dark opacity-50">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class="col-3 d-flex">
<div class="form-check form-switch ms-auto mb-0 mt-2px">
<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
</div>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="https://seantheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/js/app.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>


<script src="assets/plugins/highlight.js/highlight.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/js/demo/highlightjs.demo.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/plugins/bootstrap-table/dist/bootstrap-table.min.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="assets/js/demo/table-plugins.demo.js" type="88173b1a686e553184ba0acc-text/javascript"></script>
<script src="https://seantheme.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="88173b1a686e553184ba0acc-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71af9cb1dd6785f6","version":"2022.6.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>
