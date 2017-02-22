<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:23
 */
declare(strict_types = 1);

namespace Genre\Repository;

use Doctrine\ORM\EntityRepository;
use Genre\Model\Genre;

class GenreRepository extends EntityRepository
{

    /**
     * @return Genre[]
     */
    public function getAllGenres()
    {
        $qb = $this->createQueryBuilder('g')
                   ->addOrderBy('g.name', 'ASC');

        return $qb->getQuery()->getResult();
    }

}
