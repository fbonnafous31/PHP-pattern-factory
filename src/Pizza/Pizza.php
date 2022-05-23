<?php

    namespace App;

    abstract class Pizza {
        public string $nom;
        public string $pate;
        public string $sauce;
        public array $garnitures = array();

        public function __construct($nom, $pate, $sauce, $garnitures) {
            $this->nom = $nom;
            $this->pate = $pate;
            $this->sauce = $sauce;
            $this->garnitures = $garnitures;            
        }

        public function preparer() {
            echo "Préparation de $this->nom<br>";
            echo "Etalage de la pate<br>";
            echo "Ajout de la sauce<br>";
            echo "Ajout des garnitures : <br>";
            foreach ($this->garnitures as $garniture) {
                echo "<li>".$garniture."<br>";
            }
        }

        public function cuire() {
            echo "Cuisson 25 minutes à 180°<br>";
        }

        public function couper() {
            echo "Découpage en parts triangulaires<br>";
        }

        public function emballer() {
            echo "Emballage dans une boîte officielle<br>";
        }

        public function getNom(): string {
            return $this->nom;
        }

    }

?>