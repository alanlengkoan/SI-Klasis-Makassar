<?php

namespace ContainerIxqDrLj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGaleriController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SuperAdmin\GaleriController' shared autowired service.
     *
     * @return \App\Controller\SuperAdmin\GaleriController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SuperAdmin/GaleriController.php';

        $container->services['App\\Controller\\SuperAdmin\\GaleriController'] = $instance = new \App\Controller\SuperAdmin\GaleriController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['App\\Service\\MyfunctionHelper'] ?? $container->load('getMyfunctionHelperService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SuperAdmin\\GaleriController', $container));

        return $instance;
    }
}
