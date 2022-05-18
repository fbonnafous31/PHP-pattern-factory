<?php

    namespace App;

    class SimpleFabriqueDePizzas {

        public Pizza $pizza;

        public function creerPizza(string $type): Pizza {       
            if ($type == "fromage") {
                $pizza = new PizzaFromage();
            } elseif ($type == "poivrons") {
                $pizza = new PizzaPoivrons();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new PizzaFruitsDeMer();                
            } elseif ($type == "vegetarienne") {
                $pizza = new PizzaVegetarienne();                
            }
            return $pizza;
        }

    }

?>