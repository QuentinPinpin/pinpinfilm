<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:23
 */
declare(strict_types = 1);

namespace Actor\Repository;

use Doctrine\ORM\EntityRepository;
use Actor\Model\Actor;

class ActorRepository extends EntityRepository
{

    /**
     * @return Actor[]
     */
    public function getAllActors()
    {
        $qb = $this->createQueryBuilder('g')
                   ->addOrderBy('g.name', 'ASC');

        return $qb->getQuery()->getResult();
    }

}
