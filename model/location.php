<?php
    class Location{
        private $idLocation, $numeroImmatriculation, $cin, $dateLocation, $nbrJours, $dateRetour;
        public function __construct($id, $numero, $carte, $datel, $nbjrs, $dater){
            $this->idLocation = $id;
            $this->numeroImmatriculation = $numero;
            $this->cin = $carte;
            $this->dateLocation = $datel;
            $this->nbrJours = $nbjrs;
            $this->dateRetour = $dater;
        }

        /**
         * Get the value of idLocation
         */ 
        public function getIdLocation()
        {
                return $this->idLocation;
        }

        /**
         * Get the value of numeroImmatriculation
         */ 
        public function getNumeroImmatriculation()
        {
                return $this->numeroImmatriculation;
        }

        /**
         * Get the value of idClient
         */ 
        public function getCin()
        {
                return $this->cin;
        }

        /**
         * Get the value of dateLocation
         */ 
        public function getDateLocation()
        {
                return $this->dateLocation;
        }

        /**
         * Get the value of nbrJours
         */ 
        public function getNbrJours()
        {
                return $this->nbrJours;
        }

        /**
         * Get the value of dateRetour
         */ 
        public function getDateRetour()
        {
                return $this->dateRetour;
        }
    }
?>