
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>E-learning</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.css">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="assets/vendors/awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/gilroy/font-gilroy.css">
  <link rel="stylesheet" href="assets/vendors/magnific-popup/magnific-popup.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="assets/vendors/animated-headline/animated-headline.css">
  <link rel="stylesheet" href="assets/vendors/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/woocomerce.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body id="top-header">


<header class="header-style-1"> 
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.html">
                        
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a> 
                </div>

                <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                <li><a href="dev_web.php">Developemnt Web</a></li>
                                <li><a href="dev_mobile.php">Developemnt Mobile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        
                <nav class="site-navbar ms-auto">
                    <ul class="primary-menu">
                        <li class="current">
                            <a href="index.php">Home</a>
                            
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="cours.php">Cours</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    <a href="login.php" class="login">Login</a>
                    <a href="register.php" class="btn btn-main-2 btn-sm-2 rounded">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->
<!-- Banner Section Start -->
<section class="banner banner-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content">
                    <h1>Distant learning for further expansion </h1>
                    <p>The ultimate planning solution for people who want to reach their personal goals Effortless comfortable.</p>
                    
                    <div class="banner-form me-5">
                        <form action="cours.php"   method="post" class="form">
                            <input type="text" class="form-control" name="term" placeholder="What do you want to learn?">
                            <a type="submit" value="Submit" > Search<i class="far fa-search"></i></a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0">
                    <img src="assets/images/banner/banner_img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->
<!--  Course category -->
<section class="section-padding" style="padding: 0px 0px;" >
    <div class="container-fluid container-grid">
        <div class="row justify-content-center">
            <div class="col-xl-8" style="">
                <div class="heading mb-50 text-center">
                    <span class="subheading">Top Categories</span>
                    <h2>Browse Courses By Category</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2 mb-20">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#"> Developpement Web</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Developpement Mobile</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Course category End -->

    <!--course section start-->
    <section class="section-padding course-filter-section" >
        <div class="container">
            <div class="row align-items-center justify-content-between mb-30">
                <div class="col-xl-12">
                    <div class="heading text-center mb-40">
                        <span class="subheading">Course Trending</span>
                        <h2 class="font-lg">Explore popular courses</h2>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="container-fluid container-padding">        
            <div class="row course-gallery justify-content-center">
               
                                <?php
                                require('config.php');
                                $sql = "SELECT * FROM cours";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="course-item cat1 cat5 col-lg-3 col-md-6 col-sm-6">';
                                    echo '<div class=" course-style-5 bg-white">';
                                    echo '<div class="course-header">';
                                    echo '<div class="course-thumb">';
                                    echo '<img src="assets/images/course/img_05.jpg" alt="" class="img-fluid">';
                                    echo '<div class="course-price">300DT</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '';
                                    echo '<div class="course-content">';
                                    echo '<div class="course-meta meta-style-1">';
                                    echo '<span class="lessons"><i class="far fa-play-circle me-2"></i>'. $row["chapitres"].' Lectures</span>';
                                    echo '<span class="label">'. $row["niveau"].'</span>';
                                    echo '</div>';
                                    echo '<h4> <a href="#">'. $row["nom"].'</a> </h4>';
                                    echo '';
                                    echo '<div class="course-footer mt-20 d-flex align-items-center justify-content-between">';
                                    echo '<span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>';
                                    echo '<a href="#" class="rounded-btn"><i class="fa fa-long-arrow-right"></i></a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                   
                    ?>
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->

<!-- Section cta End -->


<!-- InstructorsSection Start -->
<section class="be-instructor section-padding-btm">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <img src="assets/images/banner/illustration.png" alt="" class="img-fluid">
             </div>

            <div class="col-xl-6 col-lg-6">
                <div class="section-heading mt-4 mt-lg-0">
                    <span class="subheading">Start Today</span>
                    <h2 class="font-lg mb-20">Become an instructor </h2>
                    <p class="mb-20">Do you want to be an instructor? Do you want to share your knowledge with everyone? If you have any skill then you can easily 
                        share your knowledge online or offline  through iLive platform & make money.</p>
                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit adipisci corporis soluta facilis eum facere nisi dolorem quisquam amet deleniti!</p>
                       
                    <a href="admin/admin_register.php" class="btn btn-main rounded" >Start Teaching today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Instructors Section End -->









  </body>
  </html>
