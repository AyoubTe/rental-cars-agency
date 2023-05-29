<?php
    class Voiture {
        private $numeroImmatriculation, $couleur, $puissance, $modele, $prix, $disponible;
        public function __construct($numero, $color, $puis, $model, $price, $dispo){
            $numeroImmatriculation = $numero;
            $disponible = $dispo;
            $prix = $price;
            $modele = $model;
            $puissance = $puis;
            $couleur = $color;
        }

        /**
         * Get the value of numeroImmatriculation
         */
        public function getNumeroImmatriculation()
        {
                return $this->numeroImmatriculation;
        }

        /**
         * Get the value of couleur
         */
        public function getCouleur()
        {
                return $this->couleur;
        }

        /**
         * Get the value of puissance
         */ 
        public function getPuissance()
        {
                return $this->puissance;
        }

        /**
         * Get the value of modele
         */ 
        public function getModele()
        {
                return $this->modele;
        }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Get the value of disponible
         */ 
        public function getDisponible()
        {
                return $this->disponible;
        }
    }
?>