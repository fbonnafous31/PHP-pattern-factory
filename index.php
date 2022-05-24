<?php

    require_once('libraries/autoload.php');

    $boutiqueBrest = new \Pizzeria\PizzeriaBrest();
    $pizza  = $boutiqueBrest->commanderPizza('fromage');
    echo "Luc a commandé une ".$pizza->getNom()."<br><br>";

    $boutiqueStrasbourg = new \Pizzeria\PizzeriaStrasbourg();
    $pizza  = $boutiqueStrasbourg->commanderPizza('fromage');
    echo "Michel a commandé une ".$pizza->getNom();

?>