<?php
/**
 * User: quentin_p
 * Date: 20/02/2017
 * Time: 14:24
 */
declare(strict_types = 1);

namespace Director;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
