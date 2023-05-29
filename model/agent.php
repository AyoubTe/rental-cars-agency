<?php
    include "personne.php";
    class Agent extends Personne{
        private $idAgent, $email, $password, $cin;
        public function __construct($id, $mail, $pass, $carte, $name, $fname, $adress){
            $idAgent = $id;
            $email = $mail;
            $password = $pass;
            $cin = $carte;
            Personne::__construct($carte, $name, $fname, $mail, $adress) ;
        }

        /**
         * Get the value of idAgent
         */ 
        public function getIdAgent()
        {
                return $this->idAgent;
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