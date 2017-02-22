<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:51
 */

namespace Genre\Service;


use Genre\Model\Genre;

interface GenreServiceInterface
{

    /**
     *
     * @return Genre[]
     */
    public function getAllGenres();

    /**
     * @param int $id
     *
     * @return Genre|null
     */
    public function getGenreById(int $id);

    public function create(Genre $genre): Genre;

    public function edit(Genre $genre): Genre;

    public function delete(Genre $genre): bool;

}
