<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 17:43
 */

namespace Image;

use Image\Controller;
use Image\Factory\ImageControllerFactory;
use Image\Factory\ImageServiceFactory;
use Image\Service\ImageService;
use Image\Service\ImageServiceInterface;
use Zend\Router\Http\Segment;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [

    'doctrine' => [
        'driver' => [
            'image_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Image/src/Model',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Image\Model' => 'image_driver',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'image' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/image[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\ImageController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => array(
        'factories' => [
            Controller\ImageController::class => ImageControllerFactory::class
        ],
    ),

    'service_manager' => [
      'factories' => [
          ImageService::class => ImageServiceFactory::class,
      ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'template_path_stack' => [
            'image' => __DIR__ . '/../view',
        ],
    ],

];
