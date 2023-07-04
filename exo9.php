<?php
header('Content-type: text/plain');
echo "---------------------------------------------\n";
echo "exo9  création d'un triangle";
echo "---------------------------------------------\n";


for ($i = 0; $i <= 5; $i++) { //gestion du nb de saut de lignes pour le triangle 
    // faire de telle façon que le nombre d'étoiles diminue à chauque tour de boucle de 0 de  1 de 2 de 3 et 4 le but est qu'à lafin il nous reste une étoile pour faire le sommet
    for ($j = 0; $j <= 5 - $i; $j++) {
        echo "*";
    }
    echo "\n";
}
