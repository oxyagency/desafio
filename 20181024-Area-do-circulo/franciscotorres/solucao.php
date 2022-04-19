<?php

/**
 * Calcula a área do círculo  
 *
 * @param float   $raio   medida do raio
 *
 * @return string
 */
function areaCirculo(float $raio): string
{
    $pi = 3.14159;
    return sprintf('A=%.4f', $pi * ($raio ** 2));
}

echo areaCirculo(2);
echo '<br>';
echo areaCirculo(100.64);
echo '<br>';
echo areaCirculo(150);
echo '<br>';
