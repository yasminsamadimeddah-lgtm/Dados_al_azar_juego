<?php
// Forma antigua de definir Array en PHP
$paises = array(
    'Francia' => [
        "Capital" => "París",
        "Poblacion" => "50000000",
        "bandera" => "bandera/francia.png"],

    'España' => [
        "Capital" => "Madrid", 
        "Poblacion" => "42000000",
        "bandera" => "bandera/españa.png"],

    'Italia' => [
        "Capital" => "Roma", 
        "bandera" => "bandera/italia.png",
        "Poblacion"   => "46000000"],

    'Argentina' => [
        "Capital" => "Buenos Aires", 
        "bandera" => "bandera/argentina.png",
        "Poblacion" => "40000000"],

    'Colombia' => [
        "Capital" => "Bogotá",
        "bandera" => "bandera/colombia.png",
         "Poblacion"  => "36000000"
    ],

    'Chile' => [
        "Capital" => "Santiago", 
        "bandera" => "bandera/chile.png",
        "Poblacion"   => "36000000"],

    'Suecia' => [
        "Capital" => "Estocolmo", 
        "bandera" => "bandera/suecia.png",
        "Poblacion" => "25000000"
        ],
);


// Forma moderna, mas compacta
$ciudades = [
    'Francia' =>    ["París","Burdeos","Niza","Lille","Nantes"],
    'España' =>     ["Madrid", "Barcelona","León","Sevilla", "Valencia", "Málaga"],
    'Italia' =>     ["Roma", "Venecia","Florencia","Pisa", "Génova", "Milán", "Turín", "Nápoles"],
    'Argentina' =>  ["Buenos Aires", "Córdoba","Parana","Rosario"],
    'Colombia' =>   ["Bogotá", "Medellín","Cali","Barranquilla", "Bucaramanga"],
    'Chile' =>      ["Santiago", "Arica","Iquique","Osorno", "Viña del Mar"],
    'Suecia' =>     ["Estocolmo", "Upsala","Gotemburgo","Lund"],
];
// Ejemplo de uso
// echo $paises["España"]["Capital"]; // Muestra Madrid


?>