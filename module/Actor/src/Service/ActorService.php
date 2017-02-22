<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:55
 */
declare(strict_types = 1);


namespace Actor\Service;


use Doctrine\ORM\EntityManager;
use Actor\Model\Actor;
use Actor\Repository\ActorRepository;

class ActorService implements ActorServiceInterface
{

    /** @var  EntityManager */
    private $entityManager;

    /** @var  ActorRepository */
    private $actorRepository;

    /**
     * ActorService constructor.
     *
     * @param EntityManager  $entityManager
     * @param ActorRepository $actorRepository
     */
    public function __construct(EntityManager $entityManager, ActorRepository $actorRepository)
    {
        $this->actorRepository = $actorRepository;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Actor[]
     */
    public function getAllActors()
    {
        return $this->actorRepository->findAll();
    }

    /**
     * @param int $id
     *
     * @return Actor|null
     */
    public function getActorById(int $id)
    {
        // TODO: Implement getActorById() method.
    }

    public function create(Actor $actor): Actor
    {
        // TODO: Implement create() method.
    }

    public function edit(Actor $actor): Actor
    {
        // TODO: Implement edit() method.
    }

    public function delete(Actor $actor): bool
    {
        // TODO: Implement delete() method.
    }
}
