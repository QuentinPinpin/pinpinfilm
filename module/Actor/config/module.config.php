<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:43
 */

namespace Actor;

use Actor\Controller;
use Actor\Factory\ActorControllerFactory;
use Actor\Factory\ActorServiceFactory;
use Actor\Service\ActorService;
use Zend\Router\Http\Segment;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [

    'doctrine' => [
        'driver' => [
            'actor_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Actor/src/Model',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Actor\Model' => 'actor_driver',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'actor' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/actor[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\ActorController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => array(
        'factories' => [
            Controller\ActorController::class => ActorControllerFactory::class
        ],
    ),

    'service_manager' => [
      'factories' => [
          ActorService::class => ActorServiceFactory::class,
      ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'template_path_stack' => [
            'actor' => __DIR__ . '/../view',
        ],
    ],

];
