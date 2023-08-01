
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
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

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
                <div class="card">
                    <h5 class="card-header">Cours  <a href="cours/create.php" class="btn btn-success"  > <i class="fa fa-plus"></i></a></h5>
                    
                    <div class="table-responsive text-nowrap">
                    <?php
                    // Include config file
                    require_once "../config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM cours";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Duration</th>";
                                        echo "<th>Niveau</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nom'] . "</td>";
                                        echo "<td>" . $row['duration'] . " /min </td>";
                                        echo "<td>" . $row['niveau'] . "</td>";
                                    
                                        echo "<td>";
                                            echo '<a href="cours/edit.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="cours/delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

</body>
</html>
