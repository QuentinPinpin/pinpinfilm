<?php
/**
 * User: quentin_p
 * Date: 21/02/2017
 * Time: 16:11
 */
declare(strict_types = 1);


namespace Image\Factory;


use Doctrine\ORM\EntityManager;
use Image\Model\Image;
use Image\Repository\ImageRepository;
use Image\Service\ImageService;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ImageServiceFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     *
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $container->get(EntityManager::class);
        /** @var ImageRepository $imageRepository */
        $imageRepository = $entityManager->getRepository(Image::class);


        return new ImageService($entityManager, $imageRepository);
    }}
