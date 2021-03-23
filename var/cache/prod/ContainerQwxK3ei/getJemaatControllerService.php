<?php

namespace ContainerQwxK3ei;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJemaatControllerService extends App_KernelProdDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\JemaatController' shared autowired service.
     *
     * @return \App\Controller\Admin\JemaatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/JemaatController.php';

        $container->services['App\\Controller\\Admin\\JemaatController'] = $instance = new \App\Controller\Admin\JemaatController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['App\\Service\\MyfunctionHelper'] ?? $container->load('getMyfunctionHelperService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Admin\\JemaatController', $container));

        return $instance;
    }
}
