<!DOCTYPE html>
<html lang="zxx">
<head>
    
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>Cours</title>

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
<?php
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM liam WHERE Description LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 

while ($row = mysql_fetch_array($r_query)){  
echo 'nom: ' .$row['nom'];  
echo '<br /> duration: ' .$row['duration'];  
echo '<br /> lessons: '.$row['chapitres'];  
echo '<br /> niveau: '.$row['niveau'];  
 
}  

}
?>
  </body>
  </html>

   
   