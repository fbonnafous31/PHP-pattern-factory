<?php

    namespace Pizza;

    class SimpleFabriqueDePizzas {

        public Pizza $pizza;

        public function creerPizza(string $type): \Pizza\Pizza {       
            if ($type == "fromage") {
                $pizza = new \Pizza\PizzaFromage();
            } elseif ($type == "poivrons") {
                $pizza = new \Pizza\PizzaPoivrons();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new \Pizza\PizzaFruitsDeMer();                
            } elseif ($type == "vegetarienne") {
                $pizza = new \Pizza\PizzaVegetarienne();                
            }
            return $pizza;
        }

    }

?>