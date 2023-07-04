<?php
header('Content-type: text/plain');
echo "---------------------------------------------\n";
echo "exo3";
echo "---------------------------------------------\n";

$nb1 = 10;

$nb2 = 15;

function addNunmber($nb1, $nb2): float
{
    return $nb1 + $nb2;
}

echo "\n\n";

$res = addNunmber($nb1, $nb2);

echo "the result of the sum of $nb1 et $nb2 =  $res";
