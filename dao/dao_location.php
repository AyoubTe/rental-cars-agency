<?php
    include "../model/location.php";
    include "../model/voiture.php";

    class DaoLocation {
        private $dbh ;
        public function __construct()
        {
            try { $this->dbh = new PDO('mysql:host=localhost;dbname=gestion_agence',"root","");

            } catch (PDOException $e){
                print "Erreur !:" . $e->getMessage() . "<br/>";
                die();
            }

        }

        public function _destruct(){
            $this->dbh = null;
        }

        public function saveLocation (Location $location){
            $stm = $this->dbh->prepare("INSERT INTO location (numeroImmatriculation,cin, dateLocation, nbrJours, dateRetour) VALUES (?,?,?,?,?)"); 
            $stm->bindValue(1, $location->getNumeroImmatriculation());
            $stm->bindValue(2, $location->getCin());
            $stm->bindValue(3, $location->getDateLocation());
            $stm->bindValue(4, $location->getNbrJours());
            $stm->bindValue(5, $location->getDateRetour());
            $stm->execute();
        }
        
        public function findLocation ($imm, $cin) {
            $location = null;
            $stm = $this->dbh->prepare("SELECT * FROM location WHERE numeroImmatriculation = ? AND cin = ?");
            $stm->bindValue(1,$imm);
            $stm->bindValue(2,$cin);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);

            if(!empty($result)){
                $location = new Location(1,$result['numeroImmatriculation'],$result['cin'], $result['dateLocation'], $result['nbrJours'], $result['dateRetour']);
            }

            return $location;
        }

        public function isDisponible($numeroImmatriculation){
            $voiture = null;
            $dispo = true;
            $stm = $this->dbh->prepare("SELECT * FROM voiture WHERE numeroImmatriculation=?");
            $stm->bindValue(1,$numeroImmatriculation);
            $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            if(!empty($result)){
                $voiture = new Voiture($result['numeroImmatriculation'],$result['couleur'],$result['puissance'],$result['modele'],$result['prix'],$result['disponibilite']);
            }
            
            if($voiture->getDisponible()=='Indisponible'){
                $dispo = false;
            }

            return $dispo;
        }

        public function findAllLocations($carte)
        {
            $locations = null;

            $stm = $this->dbh->prepare("SELECT * FROM location WHERE cin = ? ORDER BY dateLocation");
            $stm->bindValue(1,$carte);
            $stm->execute();
            $locations = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $locations;
        }

        public function updateDisponibiliteVoiture($numeroimmatriculation, $disponibilite) {
            $stm=$this->dbh->prepare("UPDATE voiture SET disponibilite = '$disponibilite' WHERE numeroimmatriculation = '$numeroimmatriculation'");
            $stm->execute();
        }

}