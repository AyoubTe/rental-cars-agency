<?php
    class Reservation{
        private $idReservation, $cin, $dateResevation, $nbrJours, $numeroImmatriculation;
        public function __construct($idr, $carte, $dater, $nbjrs, $numero){
            $this->idReservation = $idr;
            $this->cin = $carte;
            $this->dateResevation = $dater;
            $this->nbrJours = $nbjrs;
            $this->numeroImmatriculation = $numero;
        }

        /**
         * Get the value of idReservation
         */ 
        public function getIdReservation()
        {
                return $this->idReservation;
        }

        /**
         * Get the value of idClient
         */ 
        public function getCIN()
        {
                return $this->cin;
        }

        /**
         * Get the value of dateResevation
         */ 
        public function getDateResevation()
        {
                return $this->dateResevation;
        }

        /**
         * Get the value of nbrJours
         */ 
        public function getNbrJours()
        {
                return $this->nbrJours;
        }

        /**
         * Get the value of numeroImmatriculation
         */ 
        public function getNumeroImmatriculation()
        {
                return $this->numeroImmatriculation;
        }
    }
?>