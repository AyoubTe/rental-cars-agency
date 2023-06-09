<?php
    include "../model/voiture.php";

    class DaoVoiture
    {
        private $dbh;
        public function __construct()
        {
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=gestion_agence', "root", "");
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function __destruct()
        {
            $dbh = null;
        }

        public function saveVoiture(Voiture $voiture)
        {
            $stm = $this->dbh->prepare("INSERT INTO voiture VALUES (?, ?, ?, ?, ?, ?)");

            $stm->bindValue(1, $voiture->getNumeroImmatriculation());
            $stm->bindValue(2, $voiture->getCouleur());
            $stm->bindValue(3, $voiture->getPuissance());
            $stm->bindValue(4, $voiture->getModele());
            $stm->bindValue(5, $voiture->getPrix());
            $stm->bindValue(6, $voiture->getDisponible());
            $stm->execute();
        }

        public function updateVoiture(Voiture $voiture, $dispo)
        {
            $stm = $this->dbh->prepare("UPDATE voiture SET numeroImmatriculation = ?, disponibilite = ? WHERE ");

            $stm->bindValue(1, $voiture->getNumeroImmatriculation());
            $stm->bindValue(2, $dispo);
            $stm->execute();
        }

        public function deleteVoiture($car)
        {
            $stm = $this->dbh->prepare("DELETE FROM voiture  WHERE nummeroImmatriculation = ? ");
            $stm->bindValue(1, $car);
            
            $stm->execute();
        }

        public function findVoiture($numero)
        {
            $car = null;
            $stm = $this->dbh->prepare("SELECT * FROM voiture WHERE nummeroImmatriculation = ?");
            
            $stm->bindValue(1, $numero);
            $stm->execute();

            $result = $stm->fetch();

            if (!empty($result)){
                $car = new Voiture($result['numeroImmatriculation'], $result['couleur'], $result['puissance'], $result['modele'],$result['prix'],$result['disponibilite']);
            }

            return $car;
        }

        public function findAll()
        {
            $stm = $this->dbh->prepare("SELECT * FROM voiture");
            $stm->execute();
            $result = $stm->fetchAll();

            return $result;
        }
    } 
?>