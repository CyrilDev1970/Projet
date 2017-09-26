<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 26/09/17
 * Time: 00:25
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolesRepository")
 * @ORM\Table(name="roles")
 */
class Roles
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idRole;

    /**
     * @ORM\Column(name="role", type="string", length=45)
     */
    private $role;
}