<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="chartist/css/chartist.min.css">
    <link rel="stylesheet" href="chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
   <!-- Inclure les fichiers CSS -->
   



    <link href="css/css.css" rel="stylesheet">

</head>

<body>

    
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
    <div id="main-wrapper">

      
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png"   alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo10.png" class="responsive-img" alt="">
                    </span>
                </a>
            </div>
        </div>
          

        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                       
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">car's management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="ajouter.php">Add cars</a></li>
                            <li><a href="supprimer.php">Delete cars</a></li>
                            <li><a href="supprimer.php">Modify cars</a></li>
                            
                            
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">costumer's management </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="profil.php">Consult custuemer's profil</a></li>
                            <li><a href="profil.php">Modify custuemer's profil</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a href="./app-calender.html">Calender</a></li>
                        </ul>
                    </li>
                    
                        </ul>
                    </li>
                   
            </div>
        </div>
       
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">voiture disponible</h3>
                                <div class="d-inline-block">
                                  <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                    $query = "SELECT COUNT(*) AS count FROM voiture   WHERE disponibilite = 'disponible'";
                                    $result = mysqli_query($conn, $query);

                                    // Vérification des erreurs de requête
                                    if (!$result) {
                                             die('Erreur de requête : ' . mysqli_error($conn));
                                    }

                                    // Récupération du nombre de voitures disponibles
                                    $row = mysqli_fetch_assoc($result);
                                    $nombreVoituresDisponibles = $row['count'];

                                    echo "<h2 class='text-white'>" . $nombreVoituresDisponibles . "</h2>";
                                  ?>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Net Profit</h3>
                                <div class="d-inline-block">
                                <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                    $query = "SELECT SUM(prix) AS sum FROM voiture JOIN location ON voiture.numeroImmatriculation = location.numeroImmatriculation WHERE YEAR(dateLocation) = YEAR(NOW())";
                                    $result = mysqli_query($conn, $query);

                                    // Vérification des erreurs de requête
                                     if (!$result) {
                                            die('Erreur de requête : ' . mysqli_error($conn));
                                     }

                                     // Récupération de la somme des prix
                                     $row = mysqli_fetch_assoc($result);
                                     $prixTotal = $row['sum'];

                                    echo "<h2 class='text-white'>" . $prixTotal . "</h2>";
                                ?>

                                   
                                    <p class="text-white mb-0">01_Jan - today</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">New Customers</h3>
                                <div class="d-inline-block">
                                <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                    $query = "SELECT count(*) AS count FROM client " ;
                                    $result = mysqli_query($conn, $query);

                                    // Vérification des erreurs de requête
                                     if (!$result) {
                                            die('Erreur de requête : ' . mysqli_error($conn));
                                     }

                                     // Récupération de la somme des prix
                                     $row = mysqli_fetch_assoc($result);
                                     $client = $row['count'];

                                    echo "<h2 class='text-white'>" . $client . "</h2>";
                                ?>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">utilisateur de l'applicatiion</h3>
                                <div class="d-inline-block">
                                   <?php
                                       $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                       $query = "SELECT count(*) AS count FROM personne " ;
                                       $result = mysqli_query($conn, $query);

                                        // Vérification des erreurs de requête
                                       if (!$result) {
                                            die('Erreur de requête : ' . mysqli_error($conn));
                                       }

                                        // Récupération de la somme des prix
                                        $row = mysqli_fetch_assoc($result);
                                        $user = $row['count'];

                                        echo "<h2 class='text-white'>" . $user . "</h2>";
                                       ?>
                                  
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <h3>Custumer of today<h3></div>
                                    </div>
                       
                

                <div class="row">
                
                       
                    <div class="col-md-6">
                    
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div  class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                        <table class="table table-xs mb-0">
                                          <thead>
                                                <tr>
                                                    <th>nom</th>
                                                    <th>prenom</th>
                                                    <th>cin</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                // Connexion à la base de données
                                $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                        
                                // Vérification de la connexion
                                if (!$conn) {
                                    die('Échec de la connexion à la base de données : ' . mysqli_connect_error());
                                }
                                        
                                // Requête pour récupérer les enregistrements
                                $query = "SELECT cin, nom, prenom FROM personne ";
                                $result = mysqli_query($conn, $query);
                                        
                                // Boucle pour afficher les enregistrements
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['nom'] . "</td>";
                                    echo "<td>" . $row['prenom'] . "</td>";
                                    echo "<td>" . $row['cin'] . "</td>";
                                    
                                   
                                    echo "<td>" . 
                                        "<button  type='button' class='btn btn-success'>contacter</button>"
                                            
                                    . "</td>";
                                    echo "</tr>";
                                }
                                        
                                // Fermeture de la connexion
                                mysqli_close($conn);
                                ?>
                            </tbody>

                                                  
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
               
                              
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">disponibility today </h5>
                                   
                                    <div class="mt-4">
                                    <?php
                                         $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');

                                          $query = "SELECT COUNT(*) AS count FROM voiture WHERE disponibilite = 'disponible'";
                                          $result = mysqli_query($conn, $query);

                                           // Vérification des erreurs de requête
                                           if (!$result) {
                                           die('Erreur de requête : ' . mysqli_error($conn));
                                           }

                                           // Récupération du nombre de voitures disponibles
                                           $row = mysqli_fetch_assoc($result);
                                           $dispo = $row['count'];

                                           $query = "SELECT COUNT(*) AS count FROM voiture";
                                           $result = mysqli_query($conn, $query);

                                             // Vérification des erreurs de requête
                                             if (!$result) {
                                             die('Erreur de requête : ' . mysqli_error($conn));
                                             }

                                             // Récupération du nombre total de voitures
                                              $row = mysqli_fetch_assoc($result);
                                             $total = $row['count'];

                                              $resultat = ($dispo / $total) * 100;

                                              echo "<h4>" . $dispo . "</h4>";
                                              echo "<h6>Disponible <span class='pull-right'>" . $dispo . "</span></h6>";
                                              echo "<div class='progress mb-3' style='height: 7px'>
                                               <div class='progress-bar bg-primary' style='width: " . $resultat . "%' role='progressbar'>
                                               <span class='sr-only'>" . $resultat . "% Order</span>
                                               </div>
                                             </div>";
                                        ?>

                                        
                                    </div>
                                    <div class="mt-4">
                                    <?php
                                         $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');

                                          $query = "SELECT COUNT(*) AS count FROM voiture join location on voiture.numeroImmatriculation=location.numeroImmatriculation  WHERE DATE(dateLocation) = CURDATE()";
                                          $result = mysqli_query($conn, $query);

                                           // Vérification des erreurs de requête
                                           if (!$result) {
                                           die('Erreur de requête : ' . mysqli_error($conn));
                                           }

                                           // Récupération du nombre de voitures disponibles
                                           $row = mysqli_fetch_assoc($result);
                                           $louee = $row['count'];

                                           $query = "SELECT COUNT(*) AS count FROM voiture";
                                           $result = mysqli_query($conn, $query);

                                             // Vérification des erreurs de requête
                                             if (!$result) {
                                             die('Erreur de requête : ' . mysqli_error($conn));
                                             }

                                             // Récupération du nombre total de voitures
                                              $row = mysqli_fetch_assoc($result);
                                             $total = $row['count'];

                                              $resultat = ($louee / $total) * 100;

                                              echo "<h4>" . $louee . "</h4>";
                                              echo "<h6>loyed <span class='pull-right'>" . $louee . "</span></h6>";
                                              echo "<div class='progress mb-3' style='height: 7px'>
                                               <div class='progress-bar bg-primary' style='width: " . $resultat . "%' role='progressbar'>
                                               <span class='sr-only'>" . $resultat . "% Order</span>
                                               </div>
                                             </div>";
                                        ?>
                                    </div>
                                    <div class="mt-4">
                                    <?php
                                         $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');

                                          $query = "SELECT COUNT(*) AS count FROM voiture join location on voiture.numeroImmatriculation=location.numeroImmatriculation  WHERE DATE(dateRetour) = CURDATE()";
                                          $result = mysqli_query($conn, $query);

                                           // Vérification des erreurs de requête
                                           if (!$result) {
                                           die('Erreur de requête : ' . mysqli_error($conn));
                                           }

                                           // Récupération du nombre de voitures disponibles
                                           $row = mysqli_fetch_assoc($result);
                                           $returned = $row['count'];

                                           $query = "SELECT COUNT(*) AS count FROM voiture";
                                           $result = mysqli_query($conn, $query);

                                             // Vérification des erreurs de requête
                                             if (!$result) {
                                             die('Erreur de requête : ' . mysqli_error($conn));
                                             }

                                             // Récupération du nombre total de voitures
                                              $row = mysqli_fetch_assoc($result);
                                             $total = $row['count'];

                                              $resultat = ($returned / $total) * 100;

                                              echo "<h4>" . $returned . "</h4>";
                                              echo "<h6>returned today <span class='pull-right'>" . $returned . "</span></h6>";
                                              echo "<div class='progress mb-3' style='height: 7px'>
                                               <div class='progress-bar bg-primary' style='width: " . $resultat . "%' role='progressbar'>
                                               <span class='sr-only'>" . $resultat . "% Order</span>
                                               </div>
                                             </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-0">
                                    <h4 class="card-title px-4 mb-3">Todo</h4>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul id="todo_list">
                                                    <li><label><input type="checkbox"><i></i><span>add new cars</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>modify car's price</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>announce promotion </span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>add new publicity</span><a href='#' class="ti-trash"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class="px-4">
                                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="row">
                    
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="danger-txt">Gestion Location</h3>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                          <thead>
                                                <tr>
                                                    <th>Client</th>
                                                    <th>Matricule voiture</th>
                                                    <th>Date location</th>
                                                    <th>nombre de jour</th>
                                                    <th>date de retour</th>
                                                    <th>status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                // Connexion à la base de données
                                $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                        
                                // Vérification de la connexion
                                if (!$conn) {
                                    die('Échec de la connexion à la base de données : ' . mysqli_connect_error());
                                }
                                        
                                // Requête pour récupérer les enregistrements
                                $query = "SELECT cin, numeroImmatriculation, dateLocation, nbrJours, dateRetour FROM location";
                                $result = mysqli_query($conn, $query);
                                        
                                // Boucle pour afficher les enregistrements
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['cin'] . "</td>";
                                    echo "<td>" . $row['numeroImmatriculation'] . "</td>";
                                    echo "<td>" . $row['dateLocation'] . "</td>";
                                    echo "<td>" . $row['nbrJours'] . "</td>";
                                    echo "<td>" . $row['dateRetour'] . "</td>";
                                    

                                    echo "</tr>";
                                }
                                        
                                // Fermeture de la connexion
                                mysqli_close($conn);
                                ?>
                            </tbody>

                                                  
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="danger-txt">Gestion Reservation</h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                          <thead>
                                                <tr>
                                                    <th>Client</th>
                                                    <th>Matricule voiture</th>
                                                    <th>Date Reservation</th>
                                                    <th>nombre de jour</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                // Connexion à la base de données
                                $conn = mysqli_connect('localhost', 'root', '', 'gestion_agence');
                                        
                                // Vérification de la connexion
                                if (!$conn) {
                                    die('Échec de la connexion à la base de données : ' . mysqli_connect_error());
                                }
                                        
                                // Requête pour récupérer les enregistrements
                                $query = "SELECT cin, numeroImmatriculation, dateReservation, nbrJours FROM reservation";
                                $result = mysqli_query($conn, $query);
                                        
                                // Boucle pour afficher les enregistrements
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['cin'] . "</td>";
                                    echo "<td>" . $row['numeroImmatriculation'] . "</td>";
                                    echo "<td>" . $row['dateReservation'] . "</td>";
                                    echo "<td>" . $row['nbrJours'] . "</td>";
                                   
                                    echo "<td>" . 
                                        "<button  type='button' class='btn btn-danger'>supprimer</button>"
                                            
                                    . "</td>";
                                    echo "</tr>";
                                }
                                        
                                // Fermeture de la connexion
                                mysqli_close($conn);
                                ?>
                            </tbody>

                                                  
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div> 
       
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Drive Now Agence </p>
            </div>
        </div>
       
    </div>
    
   <script src="common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
   <script src="chart.js/Chart.bundle.min.js"></script>
    
    <script src="circle-progress/circle-progress.min.js"></script>
   
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    
    <script src="raphael/raphael.min.js"></script>
    <script src="morris/morris.min.js"></script>
    
    <script src="moment/moment.min.js"></script>
    <script src="pg-calendar/js/pignose.calendar.min.js"></script>
    
    <script src="chartist/js/chartist.min.js"></script>
    <script src="chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="./js/dashboard/dashboard-1.js"></script>
</body>

</html>
