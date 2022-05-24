<?php

    namespace Pizzeria;

    abstract class Pizzeria {

        public \Pizza\Pizza $pizza;

        public function commanderPizza(string $type): \Pizza\Pizza {
            $this->pizza = $this->creerPizza($type);
            $this->pizza->preparer();
            $this->pizza->cuire();
            $this->pizza->couper();
            $this->pizza->emballer();
            return $this->pizza;
        }        

        abstract function creerPizza(string $type);

    }

?>