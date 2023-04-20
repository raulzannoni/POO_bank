<h1>POO_Bank</h1>

<h3>****************************</h3>

<?php

include 'Titulaire.php';
include 'Compte.php';

//tableau associative: nom de me compte => solde initial
// $tableau_compte =   [   "Compte Courant" => 8766.43,
//                         "Livret A" => 341.17,
//                         "Caisse d'epargne" => 1872.48
//                     ];

$titulaire_1 = new Titulaire("Pippo", "Pappo", "04-11-1986", "Strasbourg");

$compte_1 = new Compte("Compte Courant",8766.43, $titulaire_1);
$compte_2 = new Compte("Livret A",8956.43, $titulaire_1);
$compte_3 = new Compte("Caisse d'epargne", 1269.65, $titulaire_1);

$compte_1->info_compte();

?>