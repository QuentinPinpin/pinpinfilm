<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:55
 */
declare(strict_types = 1);


namespace Director\Service;


use Doctrine\ORM\EntityManager;
use Director\Model\Director;
use Director\Repository\DirectorRepository;

class DirectorService implements DirectorServiceInterface
{

    /** @var  EntityManager */
    private $entityManager;

    /** @var  DirectorRepository */
    private $directorRepository;

    /**
     * DirectorService constructor.
     *
     * @param EntityManager  $entityManager
     * @param DirectorRepository $directorRepository
     */
    public function __construct(EntityManager $entityManager, DirectorRepository $directorRepository)
    {
        $this->directorRepository = $directorRepository;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Director[]
     */
    public function getAllDirectors()
    {
        return $this->directorRepository->findAll();
    }

    /**
     * @param int $id
     *
     * @return Director|null
     */
    public function getDirectorById(int $id)
    {
        // TODO: Implement getDirectorById() method.
    }

    public function create(Director $director): Director
    {
        // TODO: Implement create() method.
    }

    public function edit(Director $director): Director
    {
        // TODO: Implement edit() method.
    }

    public function delete(Director $director): bool
    {
        // TODO: Implement delete() method.
    }
}
