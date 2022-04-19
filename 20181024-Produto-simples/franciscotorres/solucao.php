<?php

/**
 * Calcula o produto de dois valores.
 *
 * @param int   $num1   Primeiro valor
 * @param int   $num2   Segundo valor
 *
 * @return string
 */
function produtoSimples(int $num1, int $num2): string
{
    return sprintf('PROD = %d', ($num1 * $num2));
}

echo produtoSimples(3, 9);
echo '<br>';
echo produtoSimples(-30, 10);
echo '<br>';
echo produtoSimples(0, 9);
echo '<br>';
