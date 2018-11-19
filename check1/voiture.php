<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 18/11/2018
 * Time: 19:56
 */

class Voiture extends Vehicule{
    private $nombrePortes;

    /**
     * @return mixed
     */
    public function getNombrePortes()
    {
        return $this->nombrePortes;
    }

    /**
     * @param mixed $nombrePortes
     */
    public function setNombrePortes($nombrePortes)
    {
        $this->nombrePortes = $nombrePortes;
    }
    public function freinMain( ){

    }

    public function __construct($marque, $prixAchat,$nombrePortes,$prixCourant) {

        Vehicule::__construct($marque, $prixAchat,$prixCourant);
        $this->setNombrePortes($nombrePortes);
    }
    public function afficheValeurAttributs() //méthode publique affiche() qui affiche la valeur des attributs.
    {
        echo $this->marque.'<br>';
        echo $this->prixCourant.'<br>';
        echo $this->prixAchat.'<br>';
        echo $this->nombrePortes.'<br>';
    }
    function déplacer( ){

    }
    public function taxeVente (){

        $tax=$this->prixCourant*5/100;
     echo   $tax;

    }


}
