<?php

    namespace Pizza;

    class PizzaFromageStyleBrest extends Pizza {
        
        public function __construct() {
            $this->nom = 'Pizza sauce style Brest et fromage';
            $this->pate = 'Pâte fine';
            $this->sauce = 'Sauce Marinara';
            $this->garnitures[] = "Parmigiano reggiano râpé";
            $this->garnitures[] = "Roquefort";
        }

    }

?>