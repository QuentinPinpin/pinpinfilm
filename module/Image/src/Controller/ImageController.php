<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:45
 */
declare(strict_types = 1);

namespace Image\Controller;

use Image\Service\ImageServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ImageController constructor.
 *
 * @param ImageServiceInterface $imageService
 */
class ImageController extends AbstractActionController
{

    /** @var ImageServiceInterface  */
    private $imageService;

    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'images' => $this->imageService->getAllImages(),
            ]
        );
    }

    public function addAction()
    {
        return new ViewModel(
            [
                'test' => "Coucou",
            ]
        );
    }

}
