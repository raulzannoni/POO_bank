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

$titulaire_1 = new Titulaire("Lucas", "Mettin", "04-11-1986", "Paris");

$compte_1 = new Compte("Compte Courant", 8766.43, $titulaire_1);
$compte_2 = new Compte("Livret A", 8956.43, $titulaire_1);
$compte_3 = new Compte("Caisse d'epargne", 1269.65, $titulaire_1);

$titulaire_1->infoTitulaire();

$compte_1->infoCompte();
$compte_2->infoCompte();
$compte_3->infoCompte();

$compte_1->creditCompte(2000);

$compte_2->debitCompte(1000);

$compte_1->virementCompte($compte_3, 1000);


$compte_1->infoCompte();
$compte_2->infoCompte();
$compte_3->infoCompte();
?>