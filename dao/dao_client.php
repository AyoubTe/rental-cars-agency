<?php
    include "../model/client.php";

    class DaoClient
    {
        private $dbh;

        public function __construct()
        {
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=gestion_agence', "root", "");
            } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function __destruct()
        {
            $this->dbh = null;
        }

        public function savePersonne(Personne $person)
        {
            $stm = $this->dbh->prepare("INSERT INTO personne  VALUES (?, ?, ?, ?, ?, ?)");

            $stm->bindValue(1, $person->getCin());
            $stm->bindValue(2, $person->getNom());
            $stm->bindValue(3, $person->getPrenom());
            $stm->bindValue(4, $person->getEmail());
            $stm->bindValue(5, $person->getAdresse());
            $stm->bindValue(6, $person->getTelephone());
            $stm->execute();
        }


        public function saveClient(Client $person)
        {
            if ($person->getCin() === null) {
                // Gérer l'erreur ou renvoyer un message d'erreur approprié
                return true;
            }
            
            $dao = new DaoClient();
            $per = $dao->findPersonne($person->getCin());
            if( $per == null ){
                $stm = $this->dbh->prepare("INSERT INTO personne VALUES (?, ?, ?, ?, ?, ?)");
                
                $stm->bindValue(1, $person->getCin());
                $stm->bindValue(2, $person->getNom());
                $stm->bindValue(3, $person->getPrenom());
                $stm->bindValue(4, $person->getEmail());
                $stm->bindValue(5, $person->getAdresse());
                $stm->bindValue(6, $person->getTelephone());
                $stm->execute();
            }

            $stm = $this->dbh->prepare("INSERT INTO client (email,password,cin) VALUES (?, ?, ?)");
            
            $stm->bindValue(1, $person->getEmail());
            $stm->bindValue(2, $person->getPassword());
            $stm->bindValue(3, $person->getCin());
            $stm->execute();
            //return true;
        }

        public function findClient($mail, $mdp)
        {
            $client = null;
            $stm = $this->dbh->prepare("SELECT * FROM client WHERE email = ? AND password = ?");
            $stm->bindValue(1, $mail);
            $stm->bindValue(2, $mdp);
            
            $stm->execute(); 
            $result = $stm->fetch();

            if(!empty($result)){
                $c = new DaoClient();
                $personne = $c->findPersonne($result['cin']);
                $client = new Client(1, $result['email'], $result['password'], $result['cin'], $personne->getNom(), $personne->getPrenom(), $personne->getAdresse(), $personne->getTelephone());
            }

            return $client;
        }

        public function findPersonne($card)
        {
            $personne = null;
            $stm = $this->dbh->prepare("SELECT * FROM personne WHERE cin = ?");
            $stm->bindValue(1, $card);

            $stm->execute(); 
            $result = $stm->fetch();
            
            if(!empty($result)){
                $personne = new Personne($result['cin'], $result['nom'], $result['prenom'], $result['email'], $result['adresse'], $result['telephone']);
            }
            return $personne;
        }
    }


    class DaoAgent
    {
        private $dbh;

        public function __construct()
        {
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=gestion_agence', "root", "");
            } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function __destruct()
        {
            $this->dbh = null;
        }

        public function savePersonne(Personne $person)
        {
            $stm = $this->dbh->prepare("INSERT INTO personne  VALUES (?, ?, ?, ?, ?, ?)");

            $stm->bindValue(1, $person->getCin());
            $stm->bindValue(2, $person->getNom());
            $stm->bindValue(3, $person->getPrenom());
            $stm->bindValue(4, $person->getEmail());
            $stm->bindValue(5, $person->getAdresse());
            $stm->bindValue(6, $person->getTelephone());
            $stm->execute();
        }


        public function saveAgent(Agent $agent)
        {
            if ($agent->getCin() === null) {
                // Gérer l'erreur ou renvoyer un message d'erreur approprié
                return true;
            }
            
            $stm = $this->dbh->prepare("INSERT INTO personne VALUES (?, ?, ?, ?, ?, ?)");

            $stm->bindValue(1, $agent->getCin());
            $stm->bindValue(2, $agent->getNom());
            $stm->bindValue(3, $agent->getPrenom());
            $stm->bindValue(4, $agent->getEmail());
            $stm->bindValue(5, $agent->getAdresse());
            $stm->bindValue(6, $agent->getTelephone());
            $stm->execute();

            $stm = $this->dbh->prepare("INSERT INTO agent (email,password,cin) VALUES (?, ?, ?)");
            
            $stm->bindValue(1, $agent->getEmail());
            $stm->bindValue(2, $agent->getPassword());
            $stm->bindValue(3, $agent->getCin());
            $stm->execute();
            //return true;
        }

        public function findAgent($mail, $mdp)
        {
            $agent = null;
            $stm = $this->dbh->prepare("SELECT * FROM agent WHERE email = ? AND password = ?");
            $stm->bindValue(1, $mail);
            $stm->bindValue(2, $mdp);

            $stm->execute(); 
            $result = $stm->fetch();

            if(!empty($result)){
                $a = new DaoAgent();
                $personne = $a->findPersonne($result['cin']);
                $agent = new Agent(1, $result['email'], $result['password'], $result['cin'], $personne->getNom(), $personne->getPrenom(), $personne->getAdresse(), $personne->getTelephone());
            }

            return $agent;
        }

        public function findPersonne($card)
        {
            $personne = null;
            $stm = $this->dbh->prepare("SELECT * FROM personne WHERE cin = ?");
            $stm->bindValue(1, $card);
            $stm->execute(); 
            $result = $stm->fetch();

            if(!empty($result)){
                $personne = new Personne($result['cin'], $result['nom'], $result['prenom'], $result['email'], $result['adresse'], $result['telephone']);
            }
            return $personne;
        }
    }
?>