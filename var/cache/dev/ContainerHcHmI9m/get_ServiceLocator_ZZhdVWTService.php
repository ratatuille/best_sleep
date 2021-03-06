<?php

namespace ContainerHcHmI9m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZZhdVWTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZZhdVWT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZZhdVWT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneCommandeRepository' => ['privates', 'App\\Repository\\LigneCommandeRepository', 'getLigneCommandeRepositoryService', true],
        ], [
            'ligneCommandeRepository' => 'App\\Repository\\LigneCommandeRepository',
        ]);
    }
}
