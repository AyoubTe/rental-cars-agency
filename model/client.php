<?php
    include "personne.php";
    class Client extends Personne {
        private $idClient, $email, $password, $cin;
        public function __construct($id, $mail, $pass, $carte, $name, $fname, $adress){
            $email = $mail;
            $idClient = $id;
            $password = $pass;
            $cin = $carte;
            Personne::__construct($carte, $name, $fname, $mail, $adress);
        }

        /**
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
?>