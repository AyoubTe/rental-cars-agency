<?php
    class Location{
        private $idLocation, $numeroImmatriculation, $idClient, $dateLocation, $nbrJours, $dateRetour;
        public function __construct($id, $numero, $idc, $datel, $nbjrs, $dater){
            $idLocation = $id;
            $numeroImmatriculation = $numero;
            $idClient = $idc;
            $dateLocation = $datel;
            $nbrJours = $nbjrs;
            $dateRetour = $dater;
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
        public function getIdClient()
        {
                return $this->idClient;
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