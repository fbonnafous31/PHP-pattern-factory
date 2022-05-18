<?php

    namespace App;
    use App\PizzeriaBrest;

    require_once('src/SimpleFabriqueDePizzas.php');
    require_once('src/Pizzeria.php');
    require_once('src/PizzeriaBrest.php');
    require_once('src/PizzeriaStrasbourg.php');
    require_once('src/Pizza.php');
    require_once('src/PizzaFromage.php');
    require_once('src/PizzaFromageStyleBrest.php');
    require_once('src/PizzaFromageStyleStrasbourg.php');
    
    $fabrique = new SimpleFabriqueDePizzas();
    $boutiqueBrest = new PizzeriaBrest($fabrique);
    $pizza  = $boutiqueBrest->commanderPizza('fromage');
    echo "Luc a commandé une ".$pizza->getNom()."<br><br>";

    $boutiqueStrasbourg = new PizzeriaStrasbourg($fabrique);
    $pizza  = $boutiqueStrasbourg->commanderPizza('fromage');
    echo "Michel a commandé une ".$pizza->getNom();


?>