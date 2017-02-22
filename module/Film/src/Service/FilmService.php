<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:55
 */
declare(strict_types = 1);


namespace Film\Service;


use Doctrine\ORM\EntityManager;
use Film\Model\Film;
use Film\Repository\FilmRepository;

class FilmService implements FilmServiceInterface
{

    /** @var  EntityManager */
    private $entityManager;

    /** @var  FilmRepository */
    private $filmRepository;

    /**
     * FilmService constructor.
     *
     * @param EntityManager  $entityManager
     * @param FilmRepository $filmRepository
     */
    public function __construct(EntityManager $entityManager, FilmRepository $filmRepository)
    {
        $this->filmRepository = $filmRepository;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Film[]
     */
    public function getAllFilms()
    {
        return $this->filmRepository->findAll();
    }

    /**
     * @param int $id
     *
     * @return Film|null
     */
    public function getFilmById(int $id)
    {
        // TODO: Implement getFilmById() method.
    }

    public function create(Film $film): Film
    {
        // TODO: Implement create() method.
    }

    public function edit(Film $film): Film
    {
        // TODO: Implement edit() method.
    }

    public function delete(Film $film): bool
    {
        // TODO: Implement delete() method.
    }
}
