<?php 

    function produtoSimples(int $a, int $b){

        $PROD = $a * $b;

        return "PROD = " . $PROD;
    }

    echo produtoSimples(3,9) . '<br>';
    echo produtoSimples(-30, 10). '<br>';
    echo produtoSimples(0, 9);