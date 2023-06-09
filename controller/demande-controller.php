<?php
    include "../dao/dao_location.php";
    include "../dao/dao_client.php";
    include "../dao/dao_reservation.php";

    $action = $_GET['action'];

    switch($action){
        case 'create':
            $cin = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['mail'];
            $adresse = $_POST['adress'];
            $telephone = $_POST['phone'];
            $password = $_POST['passe'];
            
            if (isset($nom, $prenom, $telephone, $email, $password ,$adresse, $cin)) {
                $dao = new DaoClient();
                $client = new Client(1, $email, $password, $cin, $nom, $prenom, $adresse, $telephone);
                $dao->saveClient($client);
                header('location: ../view/bienvenue.php');
            }
            break;

        case 'reserver':
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $cin = $_POST['cin'];
            $email = $_POST['mail'];
            $adresse = $_POST['adress'];
            $telephone = $_POST['phone'];
            $dateReservation = $_POST['dater'];
            $nbrJours = $_POST['nbrJ'];
            $numeroImmatriculation = $_POST['numImma'];
            // Vérifier si toutes les variables POST nécessaires sont définies
            if (isset($nom, $prenom, $cin, $email, $adresse, $telephone, $dateReservation, $nbrJours, $numeroImmatriculation)) {
                $v = new DaoReservation();
                $d = $v->isDisponible($numeroImmatriculation);
                // Tester si la voiture estdisponible
                if($d){
                    $dao = new DaoReservation();
                    $per = new DaoClient();
                    $p = $per->findPersonne($cin);
                    if ($p != null) {
                        $reservation = new Reservation(1, $cin, $dateReservation, $nbrJours, $numeroImmatriculation);
                        $dao->saveReservation($reservation);
                        $v->updateDisponibiliteVoiture($numeroImmatriculation, "Indisponible");
                        header("Location: ../view/reservation_reussite.html");
                    } else {
                        $personne = new Personne($cin, $nom, $prenom, $email, $adresse, $telephone);
                        $reservation = new Reservation(1, $cin, $dateReservation, $nbrJours, $numeroImmatriculation);
                        $per->savePersonne($personne);
                        $dao->saveReservation($reservation);
                        header("Location: ../view/reservation_reussite.html");
                        //exit(); // Terminer le script après la redirection
                    } 
                }

                else {
                    header("Location: ../view/voiture_indisponible.html");
                }
            }
            break;
        
        case 'louer':
            $dao = new DaoLocation();
            $per = new DaoClient();
            $carte = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['mail'];
            $adresse = $_POST['adress'];
            $numero = $_POST['numImma'];
            $datel = $_POST['datel'];
            $nbrJ = $_POST['nbrJ'];
            $dater = $_POST['dater'];
            $tel = $_POST['phone'];
        
            if (isset($carte, $nom, $prenom, $email, $adresse, $numero, $datel, $nbrJ, $dater, $tel)){
                $p=$per->findPersonne($carte);
                $d = $dao->isDisponible($numero);
                header("Location: ../view/paiment.html");
                // Tester si la voiture esy disponible
                if($d){
                    // Tester si les données de la personne sont déja enregistrées dans la table personne
                    if($p!=null){ 
                        $location = new Location(1, $numero, $carte, $datel, $nbrJ, $dater); 
                        $dao->saveLocation($location);
                        $dao->updateDisponibiliteVoiture($numero, "Indisponile");
                        header("Location: ../view/paiement.html");
                    } else { 
                        // si c'est un nouveau personne
                        $personne = new Personne($carte, $nom, $prenom, $email, $adresse, $tel);
                        $location = new Location(1, $numero, $carte, $datel, $nbrJ, $dater); 
                        $per->savePersonne($personne);
                        $dao->saveLocation($location);
                        $dao->updateDisponibiliteVoiture($numero, "Indisponile");
                        header("Location: ../view/paiement.html"); 
                    }
                }
                
                // Si la voiture n'est pas disponible
                else {
                    header("Location: ../view/voiture_indisponible.html");
                }
            } 
            break;
    }
?>