<?php
    class Reservation{
        private $idReservation, $idClient, $dateResevation, $nbrJours, $numeroImmatriculation;
        public function __construct($idr, $idc, $dater, $nbjrs, $numero){
            $idReservation = $idr;
            $idClient = $idc;
            $dateResevation = $dater;
            $nbrJours = $nbjrs;
            $numeroImmatriculation = $numero;
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
        public function getIdClient()
        {
                return $this->idClient;
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