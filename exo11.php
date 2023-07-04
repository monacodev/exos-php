header('Content-type: text/plain');

<?php
echo "---------------------------------------------\n";
echo "exo11";
echo "---------------------------------------------\n";

// tableau associatif qui contient des informations en relation avec des groupes de stagiaires: chacune des tables contients les jours où les stagiaires sont en stages   
$a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
);

// taille de la table du groupe 19003
$nb = count($a["19003"]);

//initialisation du compteur qui va compter le nombre d'occurrences qu'il y a  pour le mot stage dans la table groupe 19003 
$compteur = 0;

for ($i = 0; $i < $nb; $i++) {   // la boucle va se répéter autant de fois qu'il y a de case dans la table   
    if (in_array("Stage", $a["19003"]) && $i < $nb) {
        if ($a["19003"][$i] === "Stage") {
            $compteur++;
            echo "yes";
        }
    }
}

echo $compteur . "\n";

$nbSemaines = intval($compteur / 4);

echo "le nombre de semaines est : $nbSemaines ";
