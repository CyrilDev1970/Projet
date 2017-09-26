<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 26/09/17
 * Time: 00:18
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idUser;

    /**
     * @ORM\Column(name="nom", type="string", length=45)
     */
    protected $nom;

    /**
     * @ORM\Column(name="prenom", type="string", length=45)
     */
    protected $prenom;

    /**
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    protected $dateNaissance;

    /**
     * @ORM\Column(name="adresse", type="string", length=180, nullable=true)
     */
    protected $adresse;

    /**
     * @ORM\Column(name="telephone", type="string", length=12, nullable=true)
     */
    protected $telephone;

    /**
     * @ORM\Column(name="numeroPermis", type="string", length=25, nullable=true)
     */
    protected $numeroPermis;

    /**
     * @ORM\Column(name="mail", type="string", length=50)
     */
    protected $mail;

    /**
     * @ORM\Column(name="role", type="integer")
     * @ORM\OneToOne(targetEntity="Roles")
     * @ORM\JoinColumn(name="idRole", referencedColumnName="idRole")
     */
    protected $role;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * @return User
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
}
