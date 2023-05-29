<?php
    session_start();
    $_SESSION['utilisateur'] = $_POST['login'];
    $mail = $_POST['login'];
    $pass = $_POST['mdp'];
    $action = $_GET['action'];
    if(!isset($action)){
        echo "error";
    }
    switch($action){
        case 'connexion':
        case 'deconnexion':
    }
?>