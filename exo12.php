<?php
header('Content-type: text/plain');

echo "---------------------------------------------\n";
echo "exo12";
echo "---------------------------------------------\n";
$age = 9;
if ($age >= 12) {
    echo "Catégorie Cadet";
} elseif ($age >= 10) {
    echo "Catégorie Minime";
} elseif ($age >= 8) {
    echo "Catégorie Pupille";
} elseif ($age >= 6) {
    echo "Catégorie Poussin";
}
