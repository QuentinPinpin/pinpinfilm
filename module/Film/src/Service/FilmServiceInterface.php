<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:51
 */

namespace Film\Service;


use Film\Model\Film;

interface FilmServiceInterface
{

    /**
     *
     * @return Film[]
     */
    public function getAllFilms();

    /**
     * @param int $id
     *
     * @return Film|null
     */
    public function getFilmById(int $id);

    public function create(Film $film): Film;

    public function edit(Film $film): Film;

    public function delete(Film $film): bool;

}
