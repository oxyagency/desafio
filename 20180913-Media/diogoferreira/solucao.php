<?php

function media($a, $b){

    $a = $a * 3.5;
    $b = $b * 7.5;
    $media = ($a + $b)/11;

    return number_format(round($media, 5), 5);
}


echo media(5.0, 7.1) . '<br>';
echo media(0.0, 7.1) . '<br>';
echo media(10.0, 10.0);