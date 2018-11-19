<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 19/11/2018
 * Time: 09:20
 */

class Avion extends Vehicule{
    private $nombreMoteurs;
    public function décoller(){
            }
    public function __construct($marque, $dateAchat, $prixAchat,$nombreMoteurs) {

        Vehicule::__construct($marque, $dateAchat, $prixAchat);
    }
    public function afficheValeurAttributs() //méthode publique affiche() qui affiche la valeur des attributs.
    {
        echo $this->_marque;
        echo $this->_dateAchat;
        echo $this->_prixAchat;
        echo $this->_nombreMoteurs;
    }
    function déplacer( )
    {

    }




}