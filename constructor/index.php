<?php

require_once "carro.php";

$carroEspecial1 = new carro("Amarillo", "Audi", "A5", 800, 200, 5);
$carroEspecial2 = new carro("Rosa", "Ferrari", "Aventador", 800, 200, 5);
$carroEspecial3 = new carro("Verde", "Mercedes", "A5", 500, 300, 2);
$carroEspecial4 = new carro("Lila", "Renault", "A5", 800, 200, 4);


var_dump($carroEspecial1);
var_dump($carroEspecial2);
var_dump($carroEspecial3);
var_dump($carroEspecial4);

