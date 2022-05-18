<?php

    namespace App;

    class PizzaFromageStyleStrasbourg extends Pizza {
        
        public function __construct() {
            $this->nom = 'Pizza sauce style Strasbourg et fromage';
            $this->pate = 'Pâte épaisse';
            $this->sauce = 'Sauce aux tomates cerises';
            $this->garnitures[] = "Lamelles de mozzarella";
        }

        public function couper() {
            echo 'Découpage en parts carrées<br>';
        }

    }

?>