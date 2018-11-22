<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 21/11/2018
 * Time: 20:55
 */
require  'Produit.php';
require 'Electromenager.php';
require 'Textile.php';

$elec1 = new Electromenager(100,12,"EE",299,0.1);
$elec2 = new Electromenager(105,12,"ETE",333,0.35);
$tex1 = new Textile(122,13,"RR","L","R");
$tex2 = new Textile(156,19,"RR","L","R");



Textile::getNombre();
echo'<hr>';
Electromenager::getNombre();


function calculFacture(Produit ...$achats) : float {
    $totalPrice = 0;
    foreach ($achats as $equipement) {
        $totalPrice += $equipement-> CalculTotalPrix();
    }
    return $totalPrice;
}


echo ' prix total des produits :' .calculFacture($elec1,$elec2,$tex1,$tex2 ); echo"DT";
