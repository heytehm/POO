<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 19/11/2018
 * Time: 09:58
 */
function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse');

$Voiture1= new Voiture('bmw',50,4,70);
$Voiture1->afficheValeurAttributs();
$Voiture1-> taxeVente();
$avion1= new Avion('f16',2145,4,2600);
$avion1->afficheValeurAttributs();
