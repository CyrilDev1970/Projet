<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 26/09/17
 * Time: 10:00
 */

// src/AppBundle/Entity/Roles.php
namespace AppBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolesRepository")
 */
class RolesRepository extends EntityRepository
{
    //...
}