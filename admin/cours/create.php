<?php
// Include config file
require_once "../../config.php";

if(count($_POST)>0) {
	$sql = "INSERT INTO cours (nom, niveau, chapitres,duration) VALUES ('" . $_POST["nom"] . "','" . $_POST["niveau"] . "','" . $_POST["chapitres"] . "','" . $_POST["duration"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cours</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

</head>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item ">
                    <a href="dashboard.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <li class="menu-item ">
                    <a href="cours.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-book"></i>
                        <div data-i18n="Analytics">Cours</div>
                    </a>
                </li>

                <li class="menu-item ">
                    <a href="etudiants.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                        <div data-i18n="Analytics">Etudiants</div>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="layout-page">

            <div class="content-wrapper p-5">
            <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Ajout Cours</h5>
                      
                    </div>
                    <div class="card-body">
                    <form name="frmcours" method="post" action="">
                      <div style="width:500px;">
                        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                          <tr class="tableheader">
                            <td colspan="2">Add New User</td>
                          </tr>
                          <tr>
                            <td><label>Nom</label></td>
                            <td><input type="text" name="nom" class="txtField"></td>
                          </tr>
                          <tr>
                            <td><label>Niveau</label></td>
                            <td><input type="text" name="niveau" class="txtField"></td>
                          </tr>
                            <td><label>Chapitres</label></td>
                            <td><input type="number" name="chapitres" class="txtField"></td>
                            <tr>
                            <td><label>Duration</label></td>
                            <td><input type="text" name="duration" class="txtField"></td>
                          </tr>
                          
                          <tr>
                            <td colspan="2"><input type="submit" name="submit" value="Ajouter" class="btnSubmit"></td>
                          </tr>
		</table>
	</div>
</form>
                    </div>
                  </div>
            </div>

        </div>

    </div>


</div>
<footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
</body>
</html>
