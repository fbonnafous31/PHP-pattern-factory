<?php

    namespace Pizzeria;

    class PizzeriaBrest extends Pizzeria {
        public function creerPizza(string $type): \Pizza\Pizza {       
            if ($type == "fromage") {
                $pizza = new \Pizza\PizzaFromageStyleBrest();
            } elseif ($type == "poivrons") {
                $pizza = new \Pizza\PizzaPoivronsStyleBrest();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new \Pizza\PizzaFruitsDeMerStyleBrest();                
            } elseif ($type == "vegetarienne") {
                $pizza = new \Pizza\PizzaVegetarienneStyleBrest();                
            }
            return $pizza;
        }
    }

?>