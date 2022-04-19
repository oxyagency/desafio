<?php

/**
 * Calcula em minutos o tempo necessário para um objeto 
 * se distanciar de outro de acordo com a distância em km's
 *
 * @param int   $intervalo   Distancia em Km's
 *
 * @return string
 */
function distancia(int $intervalo): string
{
    $velocidadeMediaUm = 90;
    $velocidadeMediaDois = 60;
    $tempoMinutos = ($intervalo / ($velocidadeMediaUm - $velocidadeMediaDois)) * 60;
    return sprintf('%d minutos', $tempoMinutos);
}

echo distancia(30);
echo '<br>';
echo distancia(110);
echo '<br>';
echo distancia(7);
echo '<br>';
