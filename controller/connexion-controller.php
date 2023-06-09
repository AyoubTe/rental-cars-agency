<?php
    include "../dao/dao_client.php";
    $login = $_POST['login'];
    $mdp = $_POST['passe'];
    $action = $_GET['action'];
    
    switch($action){
        case 'connexion':
            // Cas de connexion d'un client
            $con1 = new DaoClient();
            $result1 = $con1->findClient($login, $mdp);

            // Cas de connexion d'un agent
            $con2 = new DaoAgent();
            $result2 = $con2->findAgent($login, $mdp);

            if(!empty($result1)){
                session_start();
                $_SESSION['email'] = $_POST['login'];
                $_SESSION['cin'] = $result1->getCin();
                
                header( "Location: ../view/redirection.html" );
            }
            
            else if(!empty($result2)){
                session_start();
                $_SESSION['email'] = $_POST['login'];
                $_SESSION['cin'] = $result2->getCin();
                // Refireger l'agent vers la page de gestion 
                header( "Location: ../view/gestion.php" );
            }

            // Cas ou Mot de passe ou email erronée ou pas un membre
            else{
                header("Location: ../view/reconnexion.html");
            }
            break;
        
        case 'deconnexion':
            session_start();
            $_SESSION['email'] = "";
            $_SESSION['cin'] = "";
            //session_reset();
            //session_destroy(); Supprime le tableau superglobal $_SESSION ==>> error dans la index.php (indefined key cin !!)
            header("Location: ../view/index.php");
    }
?>