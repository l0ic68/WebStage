<?php

namespace Main\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CarouselRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarouselRepository extends EntityRepository
{
    public function byOrder()
    {
        $qb = $this->createQueryBuilder('u')
        ->select('u')
        ->where('u.ordre != 0');
        return $qb->getQuery()->getResult();
    }
}

