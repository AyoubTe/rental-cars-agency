<?php
    include "../model/reservation.php";

    class DaoReservation {
        private $dbh ;
        public function __construct()
        {
            try { $this->dbh = new PDO('mysql:host=localhost;dbname=gestion_agence',"root","");

            } catch (PDOException $e){
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function _destruct(){
            $this->dbh = null;
        }
        
        public function saveReservation(Reservation $reservation)
        {
            $stm=$this->dbh->prepare("INSERT INTO reservation (cin, dateReservation, nbrJours,numeroImmatriculation) VALUES (?,?,?,?)");
            $stm->bindValue(1,$reservation->getCin());
            $stm->bindValue(2,$reservation->getDateResevation());
            $stm->bindValue(3,$reservation->getNbrJours());
            $stm->bindValue(4,$reservation->getNumeroImmatriculation());
            $stm->execute();
        }

        public function findAll ($cin) {
            $reservation = null;
            $stm=$this->dbh->prepare("SELECT * FROM reservation WHERE cin = ? ");
            $stm->bindValue(1,$cin);
            $stm->execute();

            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            
            if(!empty($result)){
                $reservation = $result;
            }

            return $reservation;
        }

        public function isDisponible($numeroImmatriculation){
            $voiture = null;
            $dispo = true;

            $stm=$this->dbh->prepare("SELECT * FROM voiture WHERE numeroImmatriculation=?");
            $stm->bindValue(1,$numeroImmatriculation);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);

            if(!empty($result)){
                $voiture = new Voiture($result['numeroImmatriculation'],$result['couleur'],$result['puissance'],$result['modele'],$result['prix'],$result['disponibilite']);
            }

            if($voiture->getDisponible()=='Indisponible'){
                $dispo = false;
            }
            
            return $dispo;
        }

        public function updateDisponibiliteVoiture($numeroimmatriculation, $disponibilite) {
            $stm=$this->dbh->prepare("UPDATE voiture SET disponibilite = '$disponibilite' WHERE numeroimmatriculation = '$numeroimmatriculation'");
            $stm->execute();
        }
}