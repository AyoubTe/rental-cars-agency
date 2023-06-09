<?php
    include "../dao/dao_voiture.php";

    $action = $_GET['action'];
    $dao = new DaoVoiture();

    switch ($action) {
        case 'ajouter':
            $numero = $_POST['numImma'];
            $couleur = $_POST['couleur'];
            $puissance = $_POST['puissance'];
            $modele = $_POST['modele'];
            $prix = $_POST['prix'];
            $disponible = $_POST['dispo'];
            
            if (isset($numero, $couleur, $puissance, $modele, $prix, $disponible)) {
                $voiture = new Voiture($numero, $couleur, $puissance, $modele, $prix, $disponible);
                $dao->saveVoiture($voiture);
                header("Location: ../view/gestion.php");
            }
            
            break;

        case 'modifier':
            $numero = $_POST['numImma'];
            $couleur = $_POST['couleur'];
            $puissance = $_POST['puissance'];
            $modele = $_POST['modele'];
            $prix = $_POST['prix'];
            $disponible = $_POST['disponible'];

            if (isset($numero, $couleur, $puissance, $modele, $prix, $disponible)) {
                $voiture = new Voiture($numero, $couleur, $puissance, $modele, $prix, $disponible);
                $dao->updateVoiture($voiture, $disponible);
                header("Location: ../view/gestion.php");
            }
            break;

        case 'supprimer':
            $numero = $_POST['numImma'];
            if (isset($numero)) {
                $dao->deleteVoiture($numero);
                header("Location: ../view/gestion.php");
            }
            break;
}

