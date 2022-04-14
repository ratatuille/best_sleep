<?php

namespace ContainerC6Uyp85;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8lBPYmDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8lBPYmD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8lBPYmD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneCommande' => ['privates', '.errored..service_locator.8lBPYmD.App\\Entity\\LigneCommande', NULL, 'Cannot autowire service ".service_locator.8lBPYmD": it references class "App\\Entity\\LigneCommande" but no such service exists.'],
            'ligneCommandeRepository' => ['privates', 'App\\Repository\\LigneCommandeRepository', 'getLigneCommandeRepositoryService', true],
        ], [
            'ligneCommande' => 'App\\Entity\\LigneCommande',
            'ligneCommandeRepository' => 'App\\Repository\\LigneCommandeRepository',
        ]);
    }
}
