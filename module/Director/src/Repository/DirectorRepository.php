<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:23
 */
declare(strict_types = 1);

namespace Director\Repository;

use Doctrine\ORM\EntityRepository;
use Director\Model\Director;

class DirectorRepository extends EntityRepository
{

    /**
     * @return Director[]
     */
    public function getAllDirectors()
    {
        $qb = $this->createQueryBuilder('d')
                   ->addOrderBy('d.name', 'ASC');

        return $qb->getQuery()->getResult();
    }

}
