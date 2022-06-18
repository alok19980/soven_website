<?php 
session_start();



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

</head>
<body>
<?php include("components/header.php"); ?>

<?php include("components/side-menu.php"); ?>





<div id="content" class="app-content">

<h1 class="page-header">
Add New Blog Category
</h1>
<hr/>
<form>
    <!-- text input -->
<div class="form-group mb-3">
  <label class="form-label" for="exampleFormControlInput1">Category Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please input category name here" name="category" required>
</div>
<!-- select -->
<div class="form-group mb-3">
    <label class="form-label" for="exampleFormControlInput2">Select Parent Category</label>
    <select class="form-control" name="parentCategory">
        <option>None</option>
        <option>Category 2</option>
        <option>Category 3</option>
        <option>Category 4</option>
    </select>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary" name="add_category">Add Category</button>
</div>
</form>
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


<script data-cfasync="false" src="https://seantheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="eb7e47eb8b2612539dcf5aa7-text/javascript"></script>
<script src="assets/js/app.min.js" type="eb7e47eb8b2612539dcf5aa7-text/javascript"></script>

<script type="eb7e47eb8b2612539dcf5aa7-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script src="https://seantheme.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="eb7e47eb8b2612539dcf5aa7-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71af9ccaaab085f6","version":"2022.6.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/asp-studio/layout_starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 02:32:40 GMT -->
</html>
