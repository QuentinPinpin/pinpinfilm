<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:45
 */
declare(strict_types = 1);

namespace Actor\Controller;

use Actor\Service\ActorServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ActorController constructor.
 *
 * @param ActorServiceInterface $actorService
 */
class ActorController extends AbstractActionController
{

    /** @var ActorServiceInterface  */
    private $actorService;

    public function __construct(ActorServiceInterface $actorService)
    {
        $this->actorService = $actorService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'actors' => $this->actorService->getAllActors(),
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
