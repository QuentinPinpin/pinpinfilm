<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:23
 */
declare(strict_types = 1);

namespace Film\Repository;

use Doctrine\ORM\EntityRepository;
use Film\Model\Film;

class FilmRepository extends EntityRepository
{

    /**
     * @return Film[]
     */
    public function getAllFilms()
    {
        $qb = $this->createQueryBuilder('f')
                   ->addOrderBy('f.title', 'ASC');

        return $qb->getQuery()->getResult();
    }

}
