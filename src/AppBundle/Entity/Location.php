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




}