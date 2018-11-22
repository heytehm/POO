<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 21/11/2018
 * Time: 20:40
 */

class Electromenager extends Produit
{
    private $consommation;


    public function __construct($prixHt, $reference, $designationProduit, $consommation, $taxeConsommation)
    {

        echo ' constructeur de la classe Electro<br>'; // Message s'affichant une fois que tout objet est créé.

        Produit::__construct($prixHt, $reference, $designationProduit);
        $this->setconsommation($consommation);
        self::$nbVendu++;
    }

    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;
    }


    public function TaxeConsommation()
    {
        if ($this->getConsommation() < 100) {
            return 0;
        }
        if (100 <= $this->getConsommation() && $this->getConsommation() <= 300) {
            return ($this->getPrixHt() / 10);
        }
        if (300 < $this->getConsommation()) {
            return ($this->getPrixHt() * 0.35);
        }
    }

    public function CalculTotalPrix()
    { $nbr=self::$nbVendu;
//        echo '<hr> prix electro';
        $prix = $this->getPrixHt() + ($this->TaxeConsommation());
        echo " electro :   " .$prix /** self::$nbVendu*/; echo'DT';
        echo'<hr>';

        return $prix/* * self::$nbVendu*/;

    }

    public static function getNombre()
    {

        echo " nbr de produit vendu est  : " . self::$nbVendu . "<hr>";

    }
}