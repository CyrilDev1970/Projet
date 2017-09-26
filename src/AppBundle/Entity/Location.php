<?php
/**
 * Created by PhpStorm.
 * User: ryago
 * Date: 26/09/2017
 * Time: 09:40
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="location")
 */
class Location
{
    /**
     * @ORM\Column(name="idlocation", type="integer")
     */
    private $idlocation;

    /**
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $date_debut;

    /**
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $date_fin;

    /**
     * @ORM\Column(name="statut", type="boolean")
     */
    private $client_idclient;


    private $liste_vehicule;

    /**
     * Set idlocation
     *
     * @param integer $idlocation
     *
     * @return Location
     */
    public function setIdlocation($idlocation)
    {
        $this->idlocation = $idlocation;
    
        return $this;
    }

    /**
     * Get idlocation
     *
     * @return integer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Location
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Location
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Location
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set clientIdclient
     *
     * @param boolean $clientIdclient
     *
     * @return Location
     */
    public function setClientIdclient($clientIdclient)
    {
        $this->client_idclient = $clientIdclient;
    
        return $this;
    }

    /**
     * Get clientIdclient
     *
     * @return boolean
     */
    public function getClientIdclient()
    {
        return $this->client_idclient;
    }
}
