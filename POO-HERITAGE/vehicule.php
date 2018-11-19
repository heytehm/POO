<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 18/11/2018
 * Time: 19:29
 */

class Vehicule
{
    protected $marque;
    protected $dateAchat;
    protected $prixAchat;
    protected $prixCourant;

    public function __construct($marque, $prixAchat,$prixCourant) // constructeur prenant en paramètres la marque, la date d'achat et le prix d'achat.
    {
        echo ' constructeur de la classe <br>'; // Message s'affichant une fois que tout objet est créé.
        $this->setMarque($marque); // Initialisation de la marque.
        $this->setPrixAchat($prixAchat); // Initialisation deu prix d'achat.
        $this->setPrixCourant($prixCourant); // Initialisation deu prix Courant.
    }


    public function afficheValeurAttributs() //méthode publique affiche() qui affiche la valeur des attributs.
    {
        echo $this->marque;
        echo $this->dateAchat;
        echo $this->prixAchat;
    }

    protected function déplacer(){


    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * @param mixed $dateAchat
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;
    }

    /**
     * @return mixed
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * @param mixed $prixAchat
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;
    }

    /**
     * @return mixed
     */
    public function getPrixCourant()
    {
        return $this->prixCourant;
    }

    /**
     * @param mixed $prixCourant
     */
    public function setPrixCourant($prixCourant)
    {
        $this->prixCourant = $prixCourant;
    }

}