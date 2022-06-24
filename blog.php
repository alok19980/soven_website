<?php 

include("admin/db/config.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Hi-soft - IT Solutions and Services Company HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Soven Developer - IT Solutions and Services Company</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,600i,700,700i&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <!--=================================
    header -->
    <?php include("components/header.php"); ?>
    <!--=================================
    header -->

    <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/02.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center position-relative">
              <h1 class="text-white fw-normal">Blog</h1>
              <p class="text-white mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity. When asked the question</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    inner banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          

          <?php
          $query_blogs = "SELECT * FROM articles";
          $result = mysqli_query($con, $query_blogs);
          if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)) {
              $article_category = "";
              $query_article_category = "SELECT * FROM blog_categories WHERE id='" . $row['category'] . "'";
              $result_article_category = mysqli_query($con, $query_article_category);
              if(mysqli_num_rows($result_article_category) > 0 ) {
                while($row_article_category = mysqli_fetch_assoc($result_article_category)) { 
                  $article_category = $row_article_category['name'];
                }
              } else {
                $article_category = "Uncategorized";
              }

              ?>
              <div class="col-lg-4 col-md-6 mb-4">
              <div class="blog-post">
              <div class="blog-post-image">
                <img class="img-fluid" src="uploads/images/<?php echo $row['thumbnail']; ?>" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="#" class="btn btn-light-round btn-round text-primary"><?php echo $article_category; ?></a>
                  </div>
                  <div class="blog-post-date">
                    <a href="#"><?php echo $row['published_date']; ?></a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="blog-post-title">
                    <a href="blog-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                  </h5>
                </div>
              </div>
            </div>
            </div>
    

           <?php  }
            
             }  else {

          echo "No Articles Found";
         }
         
          ?>
            
          
          
          
        </div>
        <div class="row mt-4 mt-md-5">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-primary-round btn-round">Load More<i class="fas fa-arrow-right ps-3"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Blog -->

    <!--=================================
    Action Box -->
    <section class="space-pb dark-background">
      <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">
          <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
          <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
          <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
        </div>
      </div>
    </section>
    <!--=================================
    Action Box -->

    <!-- footer-->
    <?php include("components/footer.php"); ?>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jarallax/jarallax.min.js"></script>
    <script src="js/jarallax/jarallax-video.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/horizontal-timeline/horizontal-timeline.js"></script>
    <script src="js/shuffle/shuffle.min.js"></script>
    <script src="js/shuffle/shuffle.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/hi-soft/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jun 2022 08:56:45 GMT -->
</html>
