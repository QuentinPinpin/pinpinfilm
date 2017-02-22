<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:55
 */
declare(strict_types = 1);


namespace Image\Service;


use Doctrine\ORM\EntityManager;
use Image\Model\Image;
use Image\Repository\ImageRepository;

class ImageService implements ImageServiceInterface
{

    /** @var  EntityManager */
    private $entityManager;

    /** @var  ImageRepository */
    private $imageRepository;

    /**
     * ImageService constructor.
     *
     * @param EntityManager  $entityManager
     * @param ImageRepository $imageRepository
     */
    public function __construct(EntityManager $entityManager, ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Image[]
     */
    public function getAllImages()
    {
        return $this->imageRepository->findAll();
    }

    /**
     * @param int $id
     *
     * @return Image|null
     */
    public function getImageById(int $id)
    {
        // TODO: Implement getImageById() method.
    }

    public function create(Image $image): Image
    {
        // TODO: Implement create() method.
    }

    public function edit(Image $image): Image
    {
        // TODO: Implement edit() method.
    }

    public function delete(Image $image): bool
    {
        // TODO: Implement delete() method.
    }
}
