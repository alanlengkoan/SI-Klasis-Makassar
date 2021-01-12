<?php

namespace ContainerKlRCdtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeuanganControllerService extends App_KernelProdDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\KeuanganController' shared autowired service.
     *
     * @return \App\Controller\Admin\KeuanganController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/KeuanganController.php';

        $container->services['App\\Controller\\Admin\\KeuanganController'] = $instance = new \App\Controller\Admin\KeuanganController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['App\\Service\\MyfunctionHelper'] ?? $container->load('getMyfunctionHelperService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Admin\\KeuanganController', $container));

        return $instance;
    }
}
