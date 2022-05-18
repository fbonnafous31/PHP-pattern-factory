<?php

    namespace App;

    class PizzeriaStrasbourg extends Pizzeria {
        public function creerPizza(string $type): Pizza {       
            if ($type == "fromage") {
                $pizza = new PizzaFromageStyleStrasbourg();
            } elseif ($type == "poivrons") {
                $pizza = new PizzaPoivronsStyleStrasbourg();
            } elseif ($type == "fruitsDeMer") {
                $pizza = new PizzaFruitsDeMerStyleStrasbourg();                
            } elseif ($type == "vegetarienne") {
                $pizza = new PizzaVegetarienneStyleStrasbourg();                
            }
            return $pizza;
        }
    }

?>