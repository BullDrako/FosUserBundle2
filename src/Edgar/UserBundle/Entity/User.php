<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 3/12/15
 * Time: 19:47
 */

namespace Edgar\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="`tabla_user`")
 * @ORM\Entity(repositoryClass="Edgar\UserBundle\Entity\UserRepository")
 *
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }


}