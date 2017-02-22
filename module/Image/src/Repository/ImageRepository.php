<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:23
 */
declare(strict_types = 1);

namespace Image\Repository;

use Doctrine\ORM\EntityRepository;
use Image\Model\Image;

class ImageRepository extends EntityRepository
{

    /**
     * @return Image[]
     */
    public function getAllImages()
    {
        $qb = $this->createQueryBuilder('i')
                   ->addOrderBy('i.name', 'ASC');

        return $qb->getQuery()->getResult();
    }

}
