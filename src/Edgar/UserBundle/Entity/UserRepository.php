<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 3/12/15
 * Time: 19:48
 */

namespace Edgar\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function myFindOneByUsernameOrEmail($username)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :username OR u.email = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}