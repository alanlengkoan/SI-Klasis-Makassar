<?php

namespace Container8P6Oidz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKategoriControllerService extends App_KernelProdDebugContainer
{
    /**
     * Gets the public 'App\Controller\SuperAdmin\KategoriController' shared autowired service.
     *
     * @return \App\Controller\SuperAdmin\KategoriController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'SuperAdmin'.\DIRECTORY_SEPARATOR.'KategoriController.php';

        $container->services['App\\Controller\\SuperAdmin\\KategoriController'] = $instance = new \App\Controller\SuperAdmin\KategoriController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['App\\Service\\MyfunctionHelper'] ?? $container->load('getMyfunctionHelperService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SuperAdmin\\KategoriController', $container));

        return $instance;
    }
}