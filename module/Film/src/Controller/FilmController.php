<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:45
 */
declare(strict_types = 1);

namespace Film\Controller;

use Film\Service\FilmServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * FilmController constructor.
 *
 * @param FilmServiceInterface $filmService
 */
class FilmController extends AbstractActionController
{

    /** @var FilmServiceInterface  */
    private $filmService;

    public function __construct(FilmServiceInterface $filmService)
    {
        $this->filmService = $filmService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'films' => $this->filmService->getAllFilms(),
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
