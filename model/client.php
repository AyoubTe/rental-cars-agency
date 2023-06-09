<?php
        class Personne
        {
            protected $cin, $nom, $prenom, $email, $adresse, $telephone;
            public function __construct($carte, $name, $fname, $mail, $adress, $tel) {
                $this->cin = $carte;
                $this->nom = $name;
                $this->prenom = $fname;
                $this->email = $mail;
                $this->adresse = $adress;
                $this->telephone = $tel;
            }
    
            /**
             * Get the value of cin
             */ 
            public function getCin()
            {
                    return $this->cin;
            }
    
            /**
             * Get the value of nom
             */ 
            public function getNom()
            {
                    return $this->nom;
            }
    
            /**
             * Get the value of prenom
             */ 
            public function getPrenom()
            {
                    return $this->prenom;
            }
    
            /**
             * Get the value of email
             */ 
            public function getEmail()
            {
                    return $this->email;
            }
    
            /**
             * Get the value of adresse
             */ 
            public function getAdresse()
            {
                    return $this->adresse;
            }
    
            /**
             * Get the value of telephone
             */ 
            public function getTelephone()
            {
                    return $this->telephone;
            }
        }
    
        class Client extends Personne {
        
                private   $password, $idClient;
                public function __construct( $id, $email, $pass, $carte, $name, $fname, $adress,$telephone){
                
                        $this->password = $pass;
                        $this->idClient = $id;
                        Personne::__construct($carte, $name, $fname, $email, $adress,$telephone);
                }

                /**s
                 * Get the value of idClient
                 */ 
                public function getIdClient()
                {
                        return $this->idClient;
                }

                /**
                 * Get the value of email
                 */ 
                public function getEmail()
                {
                        return $this->email;
                }

                /**
                 * Get the value of password
                 */ 
                public function getPassword()
                {
                        return $this->password;
                }

                /**
                 * Get the value of cin
                 */ 
                public function getCin()
                {
                        return $this->cin;
                }
        }
        
        class Agent extends Personne {
                private $idAgent, $password;
                public function __construct($id, $mail, $pass, $carte, $name, $fname, $adress, $tel){
                    $this->idAgent = $id;
                    $this->password = $pass;
                    Personne::__construct($carte, $name, $fname, $mail, $adress, $tel) ;
                }
        
                /**
                 * Get the value of idAgent
                 */ 
                public function getIdAgent()
                {
                        return $this->idAgent;
                }
        
                /**
                 * Get the value of password
                 */ 
                public function getPassword()
                {
                        return $this->password;
                }
        }
?>

