<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:51
 */

namespace Actor\Service;


use Actor\Model\Actor;

interface ActorServiceInterface
{

    /**
     *
     * @return Actor[]
     */
    public function getAllActors();

    /**
     * @param int $id
     *
     * @return Actor|null
     */
    public function getActorById(int $id);

    public function create(Actor $actor): Actor;

    public function edit(Actor $actor): Actor;

    public function delete(Actor $actor): bool;

}
