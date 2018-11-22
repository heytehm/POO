<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 21/11/2018
 * Time: 20:43
 */

class Textile extends Produit
{
    private $taille;
    private $couleur;

    /**
     * Textile constructor.
     * @param $prixHt
     * @param $reference
     * @param $designationProduit
     * @param $taille
     * @param $couleur
     */
    public function __construct($prixHt, $reference, $designationProduit, $taille, $couleur)
    {

        echo ' constructeur de la classe textil<br>'; // Message s'affichant une fois que tout objet est créé.


        Produit::__construct($prixHt, $reference, $designationProduit);
        $this->settaille($taille);
        $this->setcouleur($couleur);
         self::$nbVendu++;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    const TVA = 10;

    public function CalculTotalPrix(){
        echo'  prix text';
        echo $this ->getPrixHt()+  self::TVA; echo 'DT';
        echo '<hr>';
        return $this ->getPrixHt()+  self::TVA;

    }
    public static function getNombre() {

      //  echo " nbr de  : ".self::$nbVendu."<hr>" ;

    }
}