
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>Developpement Web</title>

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
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Developpement Web</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.php">Home</a></li>
              <li class="active" aria-current="page">Courses</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>Showing 1-6 of 8 results</p>
                    </div>
    
                    <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text"  placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">          
            <div class="row justify-content-lg-center">
            <?php
                                require('config.php');
                                $sql = "SELECT * FROM cours where id_cat = 2";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="col-xl-4 col-lg-4 col-md-6">';
                                    echo '<div class=" course-grid bg-shadow tooltip-style">';
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
                <!-- COURSE END -->
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->


  </body>
  </html>
