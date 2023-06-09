<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->


        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="bootstrap/css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--  -->
        <!-- owl stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
        <link rel="stylesoeet" href="bootstrap/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        <title>Profile</title>
        <style>
            body {
                background-color: black;
            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        include "../dao/dao_client.php";
        include "../dao/dao_location.php";
        include "../dao/dao_reservation.php";

        $dao = new DaoClient();
        $client = $dao->findPersonne($_SESSION['cin']);
        $cl = new DaoLocation();
        $result1 = $cl->findAllLocations($_SESSION['cin']);
        $cr = new DaoReservation();
        $result2 = $cr->findAll($_SESSION['cin']);
        $locations = '<tr><td style="text-align:center;" colspan="4">No locations</td><tr>';
        $reservations = '<tr><td style="text-align:center;" colspan="4">No reservations</td><tr>';
        if(!empty($result1))
        {
            $locations = "";
            foreach($result1 as $row)
            {
                $location = new Location(1,$row['numeroImmatriculation'], $row['cin'], $row['dateLocation'], $row['nbrJours'], $row['dateRetour']);
                $locations = $locations."<tr>
                                        <td>".$location->getDateLocation()."</td>
                                        <td>".$location->getNumeroImmatriculation()."</td>
                                        <td>".$location->getNbrJours()."</td>
                                        <td>".$location->getDateRetour()."</td>
                                        </tr>";
            }
        }

        if(!empty($result2))
        {
            $reservations = "";
            foreach($result2 as $row)
            {
                $reservation = new Reservation(1, $row['cin'], $row['dateReservation'], $row['nbrJours'], $row['numeroImmatriculation']);
                $reservations = $reservations."<tr>
                                                <td>".$reservation->getDateResevation()."</td>
                                                <td>".$reservation->getNumeroImmatriculation()."</td>
                                                <td>".$reservation->getNbrJours()."</td>
                                                </tr>";
            }
        }

        echo 
        '
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" style="color:blue;">Acceuil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="images/iconnu-profile.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                
                                
                                <h5 class="my-3" style="color: orange; font-size:35px;">'.$client->getPrenom().' '.$client->getNom().'</h5>
                                <p class="text-muted mb-4">'.$client->getAdresse().'</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Nom complet</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">'.$client->getPrenom().' '.$client->getNom().'</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">'.$client->getEmail().'</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Telephone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">'.$client->getTelephone().'</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Adresse</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">'.$client->getAdresse().'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-6 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4">Historique des locations</p>
                                        <table border="1">
                                            <tr>
                                                <td>Date location</td>
                                                <td>Numéro immatriculation</td>
                                                <td>Nombre de jours</td>
                                                <td>Date de retour</td>
                                            </tr>
                                        '.$locations.'
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"> Historiques des réservations</p>
                                        <table border="1">
                                            <tr>
                                                <td>Date reservation</td>
                                                <td>Numéro immatriculation</td>
                                                <td>Nombre de jours</td>
                                            </tr>
                                        '.$reservations.'
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
        ?>
    </body>
</html>
