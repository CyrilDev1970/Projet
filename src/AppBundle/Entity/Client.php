<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 26/09/17
 * Time: 00:18
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClient;

    /**
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom", type="string", length=45)
     */
    private $prenom;

    /**
     * @ORM\Column(name="dateNaissance", type="string", length=45)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(name="adresse", type="string", length=180)
     */
    private $adresse;

    /**
     * @ORM\Column(name="telephone", type="string", length=12)
     */
    private $telephone;

    /**
     * @ORM\Column(name="numeroPermis", type="string", length=25)
     */
    private $numeroPermis;

    /**
     * @ORM\Column(name="mail", type="string", length=50)
     */
    private $mail;

    /**
     * @ORM\Column(name="password", type="string", length=45)
     */
    private $password;

    /**
     * @ORM\Column(name="role", type="string", length=45)
     */
    private $role;

    /**
     * Get idClient
     *
     * @return integer
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     *
     * @return Client
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set numeroPermis
     *
     * @param string $numeroPermis
     *
     * @return Client
     */
    public function setNumeroPermis($numeroPermis)
    {
        $this->numeroPermis = $numeroPermis;

        return $this;
    }

    /**
     * Get numeroPermis
     *
     * @return string
     */
    public function getNumeroPermis()
    {
        return $this->numeroPermis;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Client
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
