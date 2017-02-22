<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 15:51
 */

namespace Image\Service;


use Image\Model\Image;

interface ImageServiceInterface
{

    /**
     *
     * @return Image[]
     */
    public function getAllImages();

    /**
     * @param int $id
     *
     * @return Image|null
     */
    public function getImageById(int $id);

    public function create(Image $image): Image;

    public function edit(Image $image): Image;

    public function delete(Image $image): bool;

}
