<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:43
 */

namespace Director;

use Director\Controller;
use Director\Factory\DirectorControllerFactory;
use Director\Factory\DirectorServiceFactory;
use Director\Service\DirectorService;
use Zend\Router\Http\Segment;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [

    'doctrine' => [
        'driver' => [
            'director_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                            'module/Director/src/Model',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Director\Model' => 'director_driver',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'director' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/director[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\DirectorController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => array(
        'factories' => [
            Controller\DirectorController::class => DirectorControllerFactory::class
        ],
    ),

    'service_manager' => [
      'factories' => [
          DirectorService::class => DirectorServiceFactory::class,
      ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'template_path_stack' => [
            'director' => __DIR__ . '/../view',
        ],
    ],

];
