<?php

/**
 * Soma dois inteiros.
 *
 * @param int   $num1   Primeiro valor
 * @param int   $num2   Segundo valor
 *
 * @return string
 */
function somaDoisInteiros(int $num1, int $num2): string
{
    return sprintf('X = %d', ($num1 + $num2));
}

echo somaDoisInteiros(10, 9);
echo '<br>';
echo somaDoisInteiros(-10, 4);
echo '<br>';
