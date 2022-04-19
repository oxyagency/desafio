<?php

/**
 * Calcula a média de duas notas com pesos 
 * de 3.5 para A e 7.5 para B.
 *
 * @param float   $notaA   Primeiro nota
 * @param float   $notaB   Segunda nota
 *
 * @return string
 */
function media(float $notaA, float $notaB): string
{
    return sprintf('MEDIA = %.5f', (($notaA * 3.5) + ($notaB * 7.5)) / 11);
}

echo media(5, 7.1);
echo '<br>';
echo media(0, 7.1);
echo '<br>';
echo media(10, 10);
echo '<br>';
