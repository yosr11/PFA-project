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
    <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap.css">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="../assets/vendors/awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="../assets/fonts/gilroy/font-gilroy.css">
    <link rel="stylesheet" href="../assets/vendors/magnific-popup/magnific-popup.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="../assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="../assets/vendors/animated-headline/animated-headline.css">
    <link rel="stylesheet" href="../assets/vendors/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl/assets/owl.theme.default.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../assets/css/woocomerce.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>
<?php
require('../config.php');
session_start();
if (isset($_POST['email'])){
    global $conn;
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `enseignants` WHERE email='$email' and password='".hash('sha256', $password)."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        header("Location: cours.php");
    }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>
<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Login Instractor</h2>

                        <p class="woocommerce-register">
                            Don't have an account yet? <a href="admin_register.php" class="text-decoration-underline">Inscription Gratuit </a>
                        </p>
                    </div>
                    <form class="woocommerce-form woocommerce-form-login login" method="post">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Email&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="email" autocomplete="email" value="" placeholder="Username or Email">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autocomplete="current-password" placeholder="Password">
                        </p>

                        <div class="d-flex align-items-center justify-content-between py-2">
                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                            </p>

                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Forgot password?</a>
                            </p>
                        </div>

                        <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

