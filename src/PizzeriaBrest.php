<?php

    namespace App;

    class PizzeriaBrest extends Pizzeria {
        public function creerPizza(string $type): Pizza {       
            if ($type == "fromage") {
                $pizza = new PizzaFromageStyleBrest();
            } elseif ($type == "poivrons") {
                $pizza = new PizzaPoivronsStyleBrest();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new PizzaFruitsDeMerStyleBrest();                
            } elseif ($type == "vegetarienne") {
                $pizza = new PizzaVegetarienneStyleBrest();                
            }
            return $pizza;
        }
    }

?>