<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 19/11/2018
 * Time: 09:20
 */

class Avion extends Vehicule{
    private $nombreMoteurs;

    /**
     * @return mixed
     */
    public function getNombreMoteurs()
    {
        return $this->nombreMoteurs;
    }

    /**
     * @param mixed $nombreMoteurs
     */
    public function setNombreMoteurs($nombreMoteurs)
    {
        $this->nombreMoteurs = $nombreMoteurs;
    }
    public function décoller(){
            }
    public function __construct($marque, $prixAchat,$nombreMoteurs,$prixCourant) {

        echo ' constructeur de la classe Avion<br>'; // Message s'affichant une fois que tout objet est créé.
        $this->setNombreMoteurs($nombreMoteurs);
        Vehicule::__construct($marque, $prixAchat,$prixCourant);
    }
    public function afficheValeurAttributs() //méthode publique affiche() qui affiche la valeur des attributs.
    {
        echo "la marque de l'avion est:".$this->marque.'<br>';
        echo " leprix d'achat de l'avion est: ".$this->prixAchat.'<br>';
        echo " leprix de vente de l'avion est: ".$this->prixCourant.'<br>';
        echo "le nombre de moteurs est :".$this->nombreMoteurs.'<br>';
    }
    function deplacer( )
    {

    }
}
