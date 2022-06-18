<?php 

include("db/config.php");

$name = "";

$query_user_details = "SELECT * FROM users WHERE email='" . $_SESSION['user_email'] . "'";
$result = mysqli_query($con, $query_user_details);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$name = $row['name'];
	  }
} else {
	$name = "Database Error";
}

?>

<div id="app" class="app">

<div id="header" class="app-header">

<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>
<a href="#" class="brand-logo">
<img src="../images/logo.png" alt="" height="20" />
</a>
</div>


<div class="menu">
<form class="menu-search" method="POST" name="header_search_form">


</form>
<div class="menu-item dropdown">


</div>
<div class="menu-item dropdown">
<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/user.jpg" alt="" class="ms-100 mh-100 rounded-circle" />
</div>
<div class="menu-text"><span class="__cf_email__" ><?php echo $name; ?></span></div>
</a>
<div class="dropdown-menu dropdown-menu-right me-lg-3">
<a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="actions/logout_action.php">Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-dark text-opacity-50"></i></a>
</div>
</div>
</div>

</div>
