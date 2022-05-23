<?php

    namespace App;
    require_once('autoload.php');

    $boutiqueBrest = new PizzeriaBrest();
    $pizza  = $boutiqueBrest->commanderPizza('fromage');
    echo "Luc a commandé une ".$pizza->getNom()."<br><br>";

    $boutiqueStrasbourg = new PizzeriaStrasbourg();
    $pizza  = $boutiqueStrasbourg->commanderPizza('fromage');
    echo "Michel a commandé une ".$pizza->getNom();

?>