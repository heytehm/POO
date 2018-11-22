<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 21/11/2018
 * Time: 20:30
 */

class Produit
{

    protected $prixHt;
    protected $reference;
    protected $designationProduit;
    protected static $nbVendu = 0;


    public function __construct($prixHt,$reference,$designationProduit )
    {
        echo ' constructeur de la classe Produit<br>';
        $this->setPrixHt($prixHt);
        $this->setReference($reference);
        $this->setDesignationProduit($designationProduit);
    }

    public function CalculTotalPrix(){
  return $this->prixHt;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt)
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDesignationProduit()
    {
        return $this->designationProduit;
    }

    /**
     * @param mixed $designationProduit
     */
    public function setDesignationProduit($designationProduit)
    {
        $this->designationProduit = $designationProduit;
    }


}