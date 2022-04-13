<?php


function areaDoCirculo($raio = 0.00){

    $pi = (double) 3.14159;

    $A = (double) $pi * ($raio*$raio);
    $A = number_format($A,4);
    $A = preg_replace('/[^\d.]/', '', $A);

    return 'A = ' . $A;
}

echo areaDoCirculo(2.00) . '<br>';

echo areaDoCirculo(100.64). '<br>';

echo areaDoCirculo(150.00);

