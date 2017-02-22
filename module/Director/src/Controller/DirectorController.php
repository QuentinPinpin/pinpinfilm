<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:45
 */
declare(strict_types = 1);

namespace Director\Controller;

use Director\Service\DirectorServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DirectorController constructor.
 *
 * @param DirectorServiceInterface $directorService
 */
class DirectorController extends AbstractActionController
{

    /** @var DirectorServiceInterface  */
    private $directorService;

    public function __construct(DirectorServiceInterface $directorService)
    {
        $this->directorService = $directorService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'directors' => $this->directorService->getAllDirectors(),
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
