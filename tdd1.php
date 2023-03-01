<?php
# Calculer une moyenne entre 2 nombres entiers
/*

    CN 1 : mean(3, 8) => 5,5
    CN 2 : mean(-4, 5) => -0,5
    CN 3 : mean(16, 12) => 14
*/

function mean($nb1, $nb2)
{
    return ($nb1+$nb2)/2;
}

function testMean_CN_1()
{
    if (  mean(3, 8) == 5.5 ) {
        echo "Test testMean_CN_1() : OK" ;
    }
    else
    {
        echo "Test testMean_CN_1() : Échec" ; 
    }
}

testMean_CN_1();
echo PHP_EOL;

function testMean_CN_2()
{
    if (  mean(-4, 5) == 0.5 ) {
        echo "Test testMean_CN_2() : OK" ;
    }
    else
    {
        echo "Test testMean_CN_2() : Échec" ; 
    }
}

testMean_CN_2();