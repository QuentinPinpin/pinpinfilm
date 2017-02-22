<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:45
 */
declare(strict_types = 1);

namespace Genre\Controller;

use Genre\Service\GenreServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * GenreController constructor.
 *
 * @param GenreServiceInterface $genreService
 */
class GenreController extends AbstractActionController
{

    /** @var GenreServiceInterface  */
    private $genreService;

    public function __construct(GenreServiceInterface $genreService)
    {
        $this->genreService = $genreService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'genres' => $this->genreService->getAllGenres(),
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
