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

if (isset($_REQUEST['nom'],$_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['password'])){
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $nom = stripslashes($_REQUEST['nom']);
    global $conn;
    $nom = mysqli_real_escape_string($conn, $nom);

    $prenom = stripslashes($_REQUEST['prenom']);
    $prenom = mysqli_real_escape_string($conn, $prenom);

    $classe = stripslashes($_REQUEST['classe']);
    $classe = mysqli_real_escape_string($conn, $classe);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT into `enseignants` ( nom , prenom , email, password)
              VALUES ('$nom','$prenom', '$email', '".hash('sha256', $password)."')";

    $res = mysqli_query($conn, $query);
    if($res){
       header("Location: cours.php");
    }
}else{
    ?>
    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7">

                    <div class="signup-form">
                        <div class="form-header">
                            <h2 class="font-weight-bold mb-3">Isncription Instarctor</h2>
                            <p class="woocommerce-register">
                                Already have an account? <a href="admin_login.php" class="text-decoration-underline">Login</a>
                            </p>
                        </div>

                        <form method="post" class="woocommerce-form woocommerce-form-register register">

                            <div class="row">
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Nom&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Prenom&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                                    </p>
                                </div>
                            
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                                    </p>
                                </div>

                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Mot de passe&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password" value="" placeholder="Mot de passe">
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Re-Enter Mot de passe&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="form-control" name="re-password" value="" placeholder="Re-Enter Pass">
                                    </p>
                                </div>

                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center justify-content-between py-2">
                                        <p class="form-row">
                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="policy" type="checkbox" id="policy" value="forever"> <span>Accept the Terms and Privacy Policy</span>
                                            </label>
                                        </p>

                                        <p class="woocommerce-LostPassword lost_password">
                                            <a href="#">Forgot password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <p class="woocommerce-FormRow form-row">
                                <button type="submit" class="woocommerce-button button" name="register" value="Register">Inscription</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

</body>
</html>

