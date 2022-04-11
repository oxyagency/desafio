<?php

class Desafio
{

    public function __construct()
    {
        $this->run();
    }

    private function run()
    {
        echo $this->somaDoisInteiros(10, 9);
        echo '<br>';
        echo $this->somaDoisInteiros(-10, 4);
        echo '<br>';
        //-----------------------------------
        echo $this->media(5, 7.1);
        echo '<br>';
        echo $this->media(0, 7.1);
        echo '<br>';
        echo $this->media(10, 10);
        echo '<br>';
        //-----------------------------------
        echo $this->areaCirculo(2);
        echo '<br>';
        echo $this->areaCirculo(100.64);
        echo '<br>';
        echo $this->areaCirculo(150);
        echo '<br>';
        //-----------------------------------
        echo $this->distancia(30);
        echo '<br>';
        echo $this->distancia(110);
        echo '<br>';
        echo $this->distancia(7);
        echo '<br>';
        //-----------------------------------
        echo $this->produtoSimples(3, 9);
        echo '<br>';
        echo $this->produtoSimples(-30, 10);
        echo '<br>';
        echo $this->produtoSimples(0, 9);
        echo '<br>';
        //-----------------------------------
    }

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
        $tempoMinutos = ($intervalo / ($velocidadeMediaUm-$velocidadeMediaDois)) * 60;
        return sprintf('%d minutos', $tempoMinutos);
    }

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
}

$objDesafio = new Desafio();
