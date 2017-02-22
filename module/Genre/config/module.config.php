<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:43
 */

namespace Genre;

use Genre\Controller;
use Genre\Factory\GenreControllerFactory;
use Genre\Factory\GenreServiceFactory;
use Genre\Service\GenreService;
use Genre\Service\GenreServiceInterface;
use Zend\Router\Http\Segment;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [

    'doctrine' => [
        'driver' => [
            'genre_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Genre/src/Model',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Genre\Model' => 'genre_driver',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'genre' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/genre[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\GenreController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => array(
        'factories' => [
            Controller\GenreController::class => GenreControllerFactory::class
        ],
    ),

    'service_manager' => [
      'factories' => [
          GenreService::class => GenreServiceFactory::class,
      ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'template_path_stack' => [
            'genre' => __DIR__ . '/../view',
        ],
    ],

];
