<?php

namespace ContainerLlx1x4K;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1yB7XPWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1yB7XPW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1yB7XPW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AkunController::upd_keamanan' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SuperAdmin\\AkunController::upd_keamanan' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'App\\Controller\\SuperAdmin\\GerejaController::add' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Admin\\AkunController:upd_keamanan' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SuperAdmin\\AkunController:upd_keamanan' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'App\\Controller\\SuperAdmin\\GerejaController:add' => ['privates', '.service_locator.NHPd8E5', 'get_ServiceLocator_NHPd8E5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Admin\\AkunController::upd_keamanan' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SuperAdmin\\AkunController::upd_keamanan' => '?',
            'App\\Controller\\SuperAdmin\\GerejaController::add' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AkunController:upd_keamanan' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SuperAdmin\\AkunController:upd_keamanan' => '?',
            'App\\Controller\\SuperAdmin\\GerejaController:add' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}