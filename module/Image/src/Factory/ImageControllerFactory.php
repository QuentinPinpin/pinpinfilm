<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 14:36
 */
declare(strict_types = 1);

namespace Image\Factory;

use Image\Controller\ImageController;
use Image\Service\ImageService;
use Interop\Container\ContainerInterface;
use \Zend\ServiceManager\Factory\FactoryInterface;

class ImageControllerFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  \Interop\Container\ContainerInterface $container
     * @param  string                                $requestedName
     * @param  null|array                            $options
     *
     * @return object
     * @throws \Zend\ServiceManager\Exception\ServiceNotFoundException if unable to resolve the service.
     * @throws \Zend\ServiceManager\Exception\ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws \Interop\Container\Exception\ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        /** @var ImageService $imageService */
        $imageService = $container->get(ImageService::class);

       return new ImageController($imageService);
    }}
