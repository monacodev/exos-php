<?php
/*
 * Programming Quiz: Even or Odd (3-2)
 *
 * Write an if...else statement that prints `even` if the 
 * 
 * number is even and prints `odd` if the number is odd.
 * 
 * écrivez un test if else pour afficher si un nombre est pair ou impair
 *
 * Note - make sure to print only the string "even" or the string "odd"
 * Note - assurez vous de n'afficher que le string "pair" ou "impair"
 * 
 */

header('Content-type: text/plain');
echo "---------------------------------------------\n";
echo "exo5\n";
echo "---------------------------------------------\n";

$number = 5;

$parity = $number % 2;

if ($parity) {
    print "odd";
} else {
    print "even";
}
