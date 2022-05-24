<?php

    namespace Pizzeria;

    class PizzeriaStrasbourg extends Pizzeria {
        public function creerPizza(string $type): \Pizza\Pizza {       
            if ($type == "fromage") {
                $pizza = new \Pizza\PizzaFromageStyleStrasbourg();
            } elseif ($type == "poivrons") {
                $pizza = new \Pizza\PizzaPoivronsStyleStrasbourg();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new \Pizza\PizzaFruitsDeMerStyleStrasbourg();                
            } elseif ($type == "vegetarienne") {
                $pizza = new \Pizza\PizzaVegetarienneStyleStrasbourg();                
            }
            return $pizza;
        }
    }

?>