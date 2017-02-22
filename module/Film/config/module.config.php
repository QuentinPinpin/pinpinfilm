<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:43
 */

namespace Film;

use Film\Controller;
use Film\Factory\FilmControllerFactory;
use Film\Factory\FilmServiceFactory;
use Film\Service\FilmService;
use Zend\Router\Http\Segment;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [

    'doctrine' => [
        'driver' => [
            'film_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Film/src/Model',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Film\Model' => 'film_driver',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'film' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/film[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\FilmController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => array(
        'factories' => [
            Controller\FilmController::class => FilmControllerFactory::class
        ],
    ),

    'service_manager' => [
      'factories' => [
          FilmService::class => FilmServiceFactory::class,
      ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'template_path_stack' => [
            'film' => __DIR__ . '/../view',
        ],
    ],

];
