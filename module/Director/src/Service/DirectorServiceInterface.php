<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:51
 */

namespace Director\Service;


use Director\Model\Director;

interface DirectorServiceInterface
{

    /**
     *
     * @return Director[]
     */
    public function getAllDirectors();

    /**
     * @param int $id
     *
     * @return Director|null
     */
    public function getDirectorById(int $id);

    public function create(Director $director): Director;

    public function edit(Director $director): Director;

    public function delete(Director $director): bool;

}
