<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:55
 */
declare(strict_types = 1);


namespace Genre\Service;


use Doctrine\ORM\EntityManager;
use Genre\Model\Genre;
use Genre\Repository\GenreRepository;

class GenreService implements GenreServiceInterface
{

    /** @var  EntityManager */
    private $entityManager;

    /** @var  GenreRepository */
    private $genreRepository;

    /**
     * GenreService constructor.
     *
     * @param EntityManager  $entityManager
     * @param GenreRepository $genreRepository
     */
    public function __construct(EntityManager $entityManager, GenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Genre[]
     */
    public function getAllGenres()
    {
        return $this->genreRepository->findAll();
    }

    /**
     * @param int $id
     *
     * @return Genre|null
     */
    public function getGenreById(int $id)
    {
        // TODO: Implement getGenreById() method.
    }

    public function create(Genre $genre): Genre
    {
        // TODO: Implement create() method.
    }

    public function edit(Genre $genre): Genre
    {
        // TODO: Implement edit() method.
    }

    public function delete(Genre $genre): bool
    {
        // TODO: Implement delete() method.
    }
}
