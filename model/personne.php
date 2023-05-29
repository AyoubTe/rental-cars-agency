<?php
    class Personne{
        protected $cin, $nom, $prenom, $email, $adresse;
        public function __construct($carte, $name, $fname, $mail, $adress) {
            $cin = $carte;
            $nom = $name;
            $prenom = $fname;
            $email = $mail;
            $adresse = $adress;
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
         * Set the value of prenom
         *
         * @return  self
         */ 

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
    }
?>