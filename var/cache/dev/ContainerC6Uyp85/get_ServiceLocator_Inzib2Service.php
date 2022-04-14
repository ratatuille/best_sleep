<?php

namespace ContainerC6Uyp85;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Inzib2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Inzib2_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Inzib2_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.4oDAgEZ', 'get_ServiceLocator_4oDAgEZService', true],
            'App\\Controller\\CategorieController::edit' => ['privates', '.service_locator.4oDAgEZ', 'get_ServiceLocator_4oDAgEZService', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.NeFqQFj', 'get_ServiceLocator_NeFqQFjService', true],
            'App\\Controller\\CategorieController::new' => ['privates', '.service_locator.NeFqQFj', 'get_ServiceLocator_NeFqQFjService', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\LigneCommandeController::delete' => ['privates', '.service_locator.8lBPYmD', 'get_ServiceLocator_8lBPYmDService', true],
            'App\\Controller\\LigneCommandeController::edit' => ['privates', '.service_locator.8lBPYmD', 'get_ServiceLocator_8lBPYmDService', true],
            'App\\Controller\\LigneCommandeController::index' => ['privates', '.service_locator.ZZhdVWT', 'get_ServiceLocator_ZZhdVWTService', true],
            'App\\Controller\\LigneCommandeController::new' => ['privates', '.service_locator.ZZhdVWT', 'get_ServiceLocator_ZZhdVWTService', true],
            'App\\Controller\\LigneCommandeController::show' => ['privates', '.service_locator.gukMh.S', 'get_ServiceLocator_GukMh_SService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.bn70ThF', 'get_ServiceLocator_Bn70ThFService', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.bn70ThF', 'get_ServiceLocator_Bn70ThFService', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.ONtZwya', 'get_ServiceLocator_ONtZwyaService', true],
            'App\\Controller\\ProduitController::new' => ['privates', '.service_locator.ONtZwya', 'get_ServiceLocator_ONtZwyaService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.4oDAgEZ', 'get_ServiceLocator_4oDAgEZService', true],
            'App\\Controller\\CategorieController:edit' => ['privates', '.service_locator.4oDAgEZ', 'get_ServiceLocator_4oDAgEZService', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.NeFqQFj', 'get_ServiceLocator_NeFqQFjService', true],
            'App\\Controller\\CategorieController:new' => ['privates', '.service_locator.NeFqQFj', 'get_ServiceLocator_NeFqQFjService', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\LigneCommandeController:delete' => ['privates', '.service_locator.8lBPYmD', 'get_ServiceLocator_8lBPYmDService', true],
            'App\\Controller\\LigneCommandeController:edit' => ['privates', '.service_locator.8lBPYmD', 'get_ServiceLocator_8lBPYmDService', true],
            'App\\Controller\\LigneCommandeController:index' => ['privates', '.service_locator.ZZhdVWT', 'get_ServiceLocator_ZZhdVWTService', true],
            'App\\Controller\\LigneCommandeController:new' => ['privates', '.service_locator.ZZhdVWT', 'get_ServiceLocator_ZZhdVWTService', true],
            'App\\Controller\\LigneCommandeController:show' => ['privates', '.service_locator.gukMh.S', 'get_ServiceLocator_GukMh_SService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.bn70ThF', 'get_ServiceLocator_Bn70ThFService', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.bn70ThF', 'get_ServiceLocator_Bn70ThFService', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.ONtZwya', 'get_ServiceLocator_ONtZwyaService', true],
            'App\\Controller\\ProduitController:new' => ['privates', '.service_locator.ONtZwya', 'get_ServiceLocator_ONtZwyaService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::edit' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::new' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\LigneCommandeController::delete' => '?',
            'App\\Controller\\LigneCommandeController::edit' => '?',
            'App\\Controller\\LigneCommandeController::index' => '?',
            'App\\Controller\\LigneCommandeController::new' => '?',
            'App\\Controller\\LigneCommandeController::show' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::new' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:edit' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:new' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\LigneCommandeController:delete' => '?',
            'App\\Controller\\LigneCommandeController:edit' => '?',
            'App\\Controller\\LigneCommandeController:index' => '?',
            'App\\Controller\\LigneCommandeController:new' => '?',
            'App\\Controller\\LigneCommandeController:show' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:new' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}