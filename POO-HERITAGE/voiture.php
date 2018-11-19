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
        echo 'la marque de la voiture est : ' .$this->marque.'<br>';
        echo ' le prix de vente de la voiture est: '.$this->prixCourant.'<br>';
        echo " le prix d'achat de la voitre est :".$this->prixAchat.'<br>';
        echo 'le nombre de portes de la voiture est :'. $this->nombrePortes.'<br>';
    }
    function déplacer( ){

    }
    public function taxeVente (){

        $tax=$this->prixCourant*5/100;
     echo  'le taxe sur la vente est :'. $tax;

    }


}
